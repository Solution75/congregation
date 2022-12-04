# Incident Reporter

Incident reporting api for insurance clients

## Setup development
* Install node

## Installation

```bash
npm install -g yarn
yarn install
yarn generate
```

## Set up database for local development

```bash
docker-compose up -d db
yarn migrate:dev
```

## Start server

```bash
yarn dev
```

## Migration

```bash
yarn migrate:dev
```
## Testing

```bash
docker-compose up -d db
yarn migrate:dev
yarn test
```

## Docker compose

```bash
docker-compose up -d
```
## Endpoints
* [List incidents](https://incident-reporter-enyata.herokuapp.com/incident)
* Add an incident
  ```bash
  curl -d '{"incident_desc": "May day","client_id": 1,"city": "takoradi","country": "GH"}' -H "Content-Type: application/json" -X POST https://incident-reporter-enyata.herokuapp.com/incident
  ```


