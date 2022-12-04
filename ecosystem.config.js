module.exports= {
  apps: [
    {
      name: "api",
      script: "./dist/index.js",
      autorestart: true,
      instances: "max",
      exec_mode: 'cluster',
      env: {
        NODE_ENV: "development"
      },
      env_production: {
        NODE_ENV: "production"
      }
    }
  ]
};
