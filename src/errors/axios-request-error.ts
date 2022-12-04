class AxiosRequestError extends Error {
  statusCode = 400;
  private axiosError: any;

  constructor(error: any,customMessage:string) {
    super(customMessage);
    this.axiosError = error;
  }

  sanitizeError() {
    let message;
    if (this.axiosError.response) {
      message = this.axiosError.response.data;

    } else if (this.axiosError.request) {
      // The request was made but no response was received
    message = this.axiosError.request;
    } else {
      // unknown error
      message =  this.axiosError.message;
    }
    return message;
  }
}

export default AxiosRequestError;
