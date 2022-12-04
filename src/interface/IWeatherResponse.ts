interface ICoord {
  lon: number;
  lat: number;
}

interface IWeather {
  id: number;
  main: string;
  description?: string;
  icon?: string;
}

interface IMain {
  temp: number;
  feels_like: number;
  temp_min: number;
  temp_max: number;
  pressure: number;
  humidity: number;
  sea_level: number;
  grnd_level: number;
}

interface IWind {
  speed: number;
  deg: number;
  gust: number;
}

interface IRain {
  [key:string]: number;
}

interface IClouds {
  all: number;
}

interface ISys {
  type: number;
  id: number;
  country?: string;
  sunrise: number;
  sunset: number;
}

export interface IWeatherResponse {
  coord: Partial<ICoord>;
  weather: Partial<IWeather[]>;
  base: string;
  main: Partial<IMain>;
  visibility: number;
  wind: Partial<IWind>;
  rain: Partial<IRain>;
  clouds: Partial<IClouds>;
  dt: number;
  sys: Partial<ISys>;
  timezone: number;
  id: number;
  name: string;
  cod: number;
}
