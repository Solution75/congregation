import { Application } from "express";
import incidentRouter from "./incident-router";

/**
 * ! Initialize all routes here
 */
 const initRoutes = (app: Application) => {
  app.get("/api/v1/health-check", (_, res) => res.sendStatus(200));

  //Incident Router
  app.use("/incident", incidentRouter);
};
export default initRoutes;
