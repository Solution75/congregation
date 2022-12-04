import { Prisma } from "@prisma/client";
import { Request, Response, NextFunction } from "express";
import { IReport } from "../interface/IReport";
import prismaDb from "../libs/prisma-db";
import OpenWeatherService from "../services/openweather-service";

export const postIncidentController = async (
  req: Request,
  res: Response,
  next: NextFunction
) => {
  try {
    const { client_id, incident_desc, city, country }: IReport = req.body;

    const openWeatherService = new OpenWeatherService();
    const weatherData = await openWeatherService.getCurrentWeather(
      city,
      country
    );

    // cast weather data to Prisma object
    const jsonWeather = weatherData as Prisma.JsonObject;

    // Store in db
    await prismaDb.incident.create({
      data: {
        client_id,
        incident_desc,
        city,
        country,
        weather_report: jsonWeather,
      },
    });

    return res.sendStatus(201);
  } catch (error) {
    return next(error);
  }
};

export const getIncidentController = async (
  req: Request,
  res: Response,
  next: NextFunction
) => {
  try {
    const sortBy = (req.query.sortBy as string) || undefined;
    const page = parseInt(req.query.page as string, 10) || 1;
    const perPage = parseInt(req.query.perPage as string, 10) || 25;

    const sortDirection: Prisma.SortOrder = sortBy === "asc" ? "asc" : "desc";
    let orderByQuery: Prisma.incidentOrderByWithAggregationInput = {
      date: sortDirection,
    };

    const total = await prismaDb.incident.count();

    const incidents = await prismaDb.incident.findMany({
      take: perPage,
      orderBy: orderByQuery,
      skip: perPage * (page - 1),
    });

    return res.status(200).json({
      pageInfo: {
        total,
        pageCount: Math.ceil(total / perPage),
        currentPage: page,
        from: (page - 1) * perPage + 1,
        to: (page - 1) * perPage + incidents.length,
      },
      data: incidents,
    });
  } catch (error) {
    return next(error);
  }
};
