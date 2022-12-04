import express from "express";
import {
  getIncidentController,
  postIncidentController,
} from "../controllers/incident-controller";
import validateRequestMiddleWare from "../middlewares/validate-request-middleware";
import postIncidentValidator from "../validators/post-incident-validator";

const incidentRouter = express.Router();

incidentRouter.post(
  "/",
  postIncidentValidator,
  validateRequestMiddleWare,
  postIncidentController
);
incidentRouter.get("/", getIncidentController);

export default incidentRouter;
