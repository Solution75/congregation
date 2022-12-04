import http from "http";
import dotenv from "dotenv";
import Debug from "debug";
import app from "./app";
import resources from "./constants/resources";

dotenv.config();

const debug = Debug(`${resources.DEBUG_NAME}:server`);

const server = http.createServer(app);

const port = parseInt(process.env.PORT || "5000", 10);

server.on("listening", () => debug("connection up and running"));

server.on("error", (error) => {
  switch ((error as NodeJS.ErrnoException).code) {
    case "EACCES":
      debug(`${port} requires elevated privileges`);
      process.exit(1);
      break;
    case "EADDRINUSE":
      debug(`${port} is already in use`);
      setTimeout(() => {
        server.close();
        server.listen(port);
      }, 1000);
      break;
    default:
      debug(error)
      throw error;
  }
});
export default server;
