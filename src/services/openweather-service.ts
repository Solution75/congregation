import axios from 'axios'
import resources from '../constants/resources'
import AxiosRequestError from '../errors/axios-request-error'
import { IWeatherResponse } from '../interface/IWeatherResponse'
import dotenv from "dotenv";

dotenv.config()

/**
 * @description Open weather service
 */
class OpenWeatherService {
  private baseUrl: string


  constructor() {
    this.baseUrl = `${resources.OPEN_WEATHER_URL}appid=${process.env.OPEN_WEATHER_API_KEY}`
  }


  /**
   * @description get current weather condition
   */
  async getCurrentWeather(city:string,country:string):Promise<Partial<IWeatherResponse>>{
    try {
      const url = `${this.baseUrl}&q=${city},${country}`
      const {data} = await axios.get(url)
      return data
    } catch (error) {
      throw new AxiosRequestError(error,`could not fetch weather data for city ${city} or country ${country}`)
    }

  }
}

export default OpenWeatherService
