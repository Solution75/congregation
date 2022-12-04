import superTest from "supertest";
import app from "../app";
import prismaDb from "../libs/prisma-db";
import Debug from "debug";
import resources from "../constants/resources";


const debug = Debug(`${resources.DEBUG_NAME}:test-helpers`);


export const testServer = superTest(app);

export const clearDatabase = async () => {
  const tablenames = await prismaDb.$queryRaw<
    Array<{ tablename: string }>
  >`SELECT tablename FROM pg_tables WHERE schemaname='public'`;

  for (const { tablename } of tablenames) {
    if (tablename !== "_prisma_migrations") {
      try {
        await prismaDb.$executeRawUnsafe(
          `TRUNCATE TABLE "public"."${tablename}" CASCADE;`
        );
      } catch (error) {
        console.log({ error });
      }
    }
  }
  debug('tablenames ', tablenames)
};
