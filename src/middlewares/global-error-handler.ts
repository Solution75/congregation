import { NextFunction, Request, Response } from "express";
import Debug from "debug";
import CustomError from "../errors/custom-error";
import {
  PrismaClientValidationError,
  PrismaClientKnownRequestError,
} from "@prisma/client/runtime";
import AxiosRequestError from "../errors/axios-request-error";
import resources from "../constants/resources";

const debug = Debug(`${resources.DEBUG_NAME}:global error handler`);

// eslint-disable-next-line no-unused-vars
const globalErrorHandler = (
  error: Error,
  _: Request,
  res: Response,
  _next: NextFunction
) => {
  if (error instanceof CustomError) {
    return res.status(error.statusCode).json({
      data: error.serializeErrors(),
    });
  }
  if (error instanceof PrismaClientValidationError) {
    debug(error)
    return res
      .status(400)
      .json({ data: [{ message: "data validation error" }] });
  }

  if (error instanceof PrismaClientKnownRequestError) {
    debug(error);
    return res.status(400).json({ data: [{ message: error.meta?.cause || "unexpected error" }] });
  }

  if (error instanceof AxiosRequestError) {
    debug(error.sanitizeError());
    return res.status(error.statusCode).json({ data: [{ message: error.message }] });
  }

  debug("This is a 500 error: ", error.message);
  debug("This is a 500 error body: ", error);
  return res
    .status(500)
    .send({ data: [{ message: "unknown error occurred" }] });
};

export default globalErrorHandler;
