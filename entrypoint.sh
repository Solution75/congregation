#!/bin/sh

set -e

echo "migrating..."
yarn migrate:deploy
echo "tables created"

echo "start app"
exec "$@"
