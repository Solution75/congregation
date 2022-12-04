import express, { json, urlencoded } from "express";
import cors from "cors";
import morgan from "morgan";
import helmet from "helmet";
import globalErrorHandler from "./middlewares/global-error-handler";
import NotFoundError from "./errors/not-found-error";
import routeRateLimiter from "./middlewares/route-rate-limiter";
import initRoutes from "./routes/init-routes";
const app = express();

app.set("trust proxy", true);
app.disable("x-powered-by");

app.use(morgan("combined"));
app.use(helmet());

app.use(json())
app.use(urlencoded({ extended: false }));

app.use(
  cors({
    methods: ["POST", "GET", "PUT", "DELETE", "OPTIONS"],
    optionsSuccessStatus: 200,
  })
);

// Rate limit
app.use(routeRateLimiter);

initRoutes(app);


app.use("*", () => {
  throw new NotFoundError();
});
app.use(globalErrorHandler);

export default app;
