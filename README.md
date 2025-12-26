# Oldest Listen

API REST built with PHP 8.2 using the Slim Framework. It consumes the official Spotify API, stores the dates of the last listened albums from an account, and lists them.

## Stack
- PHP 8.2+
- Slim Framework 4
- Docker.
- Composer.

## Requirements
All services run inside Docker containers. You only need the following installed on your machine:

- Docker.
- Docker Compose.

## Installation
```bash
git clone https://github.com/andsu-marks/oldest-listen.git
cd oldest-listen
docker compose up -d
docker compose exec php composer install
```

## API Available On
```bash
http://localhost:8003
```
