import {PrismaClient} from '@prisma/client'


const prismaDb = new PrismaClient({
  errorFormat: "pretty",
  log: [
    {
      emit: "stdout",
      level: process.env.NODE_ENV === "production" ? "error" : "query",
    },
  ],
});

export default prismaDb;
