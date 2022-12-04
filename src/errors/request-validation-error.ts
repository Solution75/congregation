import CustomError from "./custom-error";
import { ValidationError } from 'express-validator';


class RequestValidationError extends CustomError {
  statusCode = 422;
  errors: ValidationError[];

  constructor(errors: ValidationError[]) {
    super("invalid request parameters");
    this.errors = errors;
  }

  serializeErrors() {
    return this.errors.map((error) => ({
      message: error.msg,
      field: error.param
    }));
  }
}

export default RequestValidationError;
