FROM node:lts-alpine3.16 as builder

WORKDIR /usr/app

COPY package.json ./
COPY yarn.lock ./

RUN yarn config set unsafe-perm true

COPY . .

RUN yarn install
RUN yarn generate
RUN yarn build

#----- Staging
FROM node:lts-alpine3.16 as stager

WORKDIR /usr/app

ENV NODE_ENV=production

RUN yarn config set unsafe-perm true


COPY --from=builder /usr/app/package.json ./
COPY --from=builder /usr/app/yarn.lock ./

COPY prisma ./prisma


RUN apk add --no-cache --virtual native-deps \
  g++ gcc libgcc libstdc++ linux-headers make python3 && \
  yarn global add node-gyp && \
  yarn install --prod && \
  yarn generate && \
  apk del native-deps

#----- Production
FROM node:lts-alpine3.16 as prod

WORKDIR /usr/app

ENV LANG C.UTF-8
ENV LC_ALL C.UTF-8
ENV NODE_ENV=production

RUN yarn global add pm2


COPY --chown=node:node --from=stager /usr/app/package.json ./
COPY --chown=node:node --from=stager /usr/app/yarn.lock ./
COPY --chown=node:node --from=builder /usr/app/dist ./dist
COPY --chown=node:node --from=stager /usr/app/node_modules ./node_modules
COPY --chown=node:node prisma ./prisma
COPY --chown=node:node ecosystem.config.js ./
COPY --chown=node:node entrypoint.sh ./

RUN chmod +x entrypoint.sh


USER node

# Heroku setup
EXPOSE $PORT

CMD ["yarn", "start"]
ENTRYPOINT [ "./entrypoint.sh" ]
