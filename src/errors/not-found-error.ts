import CustomError from "./custom-error";

/**
 * Error for unknown routes and data
 */
class NotFoundError extends CustomError {
  statusCode = 404;

  constructor(message = "Route not found") {
    super(message);
  }

  serializeErrors() {
    return [{ message: this.message }];
  }
}
export default NotFoundError;
