import AxiosRequestError from "../../errors/axios-request-error";
import OpenWeatherService from "../openweather-service";


describe("test openweather service", () => {
  const weatherService = new OpenWeatherService();

  test("should fail", async () => {
    try {
      await weatherService.getCurrentWeather("", "");
    } catch (e) {
      expect(e).toBeInstanceOf(AxiosRequestError);
    }
  });

  test("should pass", async () => {
    const data = await weatherService.getCurrentWeather("takoradi", "Ghana");
    expect(data).toBeTruthy()
  });
});
