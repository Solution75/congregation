-- CreateTable
CREATE TABLE "incident" (
    "id" UUID NOT NULL,
    "date" TIMESTAMP(3) NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "client_id" INTEGER NOT NULL,
    "incident_desc" TEXT NOT NULL,
    "city" VARCHAR(125) NOT NULL,
    "country" VARCHAR(50) NOT NULL,
    "weather_report" JSONB NOT NULL,

    CONSTRAINT "incident_pkey" PRIMARY KEY ("id")
);
