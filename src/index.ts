import dotenv from "dotenv";
import Debug from "debug";
import server from "./server";
import prismaDb from "./libs/prisma-db";
import resources from "./constants/resources";

dotenv.config();

const debug = Debug(`${resources.DEBUG_NAME}:index`);

const port = parseInt(process.env.PORT || "5000", 10);

const main = async () => {
  try {
    await prismaDb.$connect();
    return server.listen(port, () => debug("App started on port", port));
  } catch (error) {
    debug(error);
    await prismaDb.$disconnect()
  }
};

main();
