import { checkSchema } from "express-validator";

const postIncidentValidator = checkSchema(
  {
    client_id: {
      notEmpty: {},
      trim: {},
      isInt: { negated: false, options: { allow_leading_zeroes: false } },
      toInt: { options: 10 },
    },
    incident_desc: {
      notEmpty: {},
      isString: {},
      trim: {},
    },
    city: {
      notEmpty: {},
      isString: {},
      trim: {},
    },
    country: {
      notEmpty: {},
      isString: {},
      trim: {},
    },
  },
  ["body"]
);

export default postIncidentValidator;
