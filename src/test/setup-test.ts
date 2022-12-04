import dotenv from "dotenv";
import prismaDb from "../libs/prisma-db";
import { clearDatabase } from "./test-helper";

beforeAll(async () => {
  dotenv.config();
  process.env.NODE_ENV = "test";
  await prismaDb.$connect();
  await clearDatabase();
});

afterAll(async () => {
  await clearDatabase();
  await prismaDb.$disconnect();
});
