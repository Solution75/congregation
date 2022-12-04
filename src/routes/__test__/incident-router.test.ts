import { testServer } from "../../test/test-helper";

describe("test openweather router", () => {
  test("POST /incident should throw validation error", async () => {
    const res = await testServer
      .post("/incident")
      .set("Accept", "application/json")
      .send({
        incident_desc: "May day",
        city: "takoradi",
        country: "GH",
      });
    expect(res.status).toEqual(400);
    expect(res.body.data[0].field).toEqual('client_id');
  });

  test("POST /incident should create an incident", async () => {
    const res = await testServer
      .post("/incident")
      .send({
        incident_desc: "May day",
        city: "takoradi",
        country: "GH",
        client_id: 123,
      });
    expect(res.status).toEqual(201);
  });

  test("GET /incident should return list of incidents", async () => {
    const res = await testServer.get("/incident");
    expect(res.status).toEqual(200);
    expect(res.body).toHaveProperty("pageInfo");
  });
});
