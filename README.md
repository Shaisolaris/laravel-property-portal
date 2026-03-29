# Laravel Property Portal

Full-stack property listing and management platform built with Laravel. Handles property listings, search and filtering, user management, inquiry tracking, and AWS integrations for media storage and delivery.

## Stack

- **Framework**: Laravel (PHP 8+)
- **Database**: MySQL
- **Storage**: AWS S3 for media files
- **Cache**: Redis
- **Queue**: Laravel Horizon / Redis
- **Search**: Elasticsearch / Scout

## Features

- Property listing CRUD with image galleries
- Advanced search and filtering (location, price, type, beds/baths)
- User roles: admin, agent, buyer, seller
- Inquiry and lead management system
- Saved searches and favourites
- Agent profiles and performance dashboard
- AWS S3 media storage with CloudFront CDN delivery
- Email notifications via SES

## Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
npm run dev
```

## Environment

Copy `.env.example` to `.env` and configure:

- `DB_*` — MySQL connection
- `AWS_*` — S3 bucket and credentials
- `REDIS_*` — Redis connection for cache and queues
- `MAIL_*` — Mail driver configuration

> **Note:** Never commit `.env` to version control. This file contains sensitive credentials and is excluded via `.gitignore`.

## Requirements

- PHP 8.1+
- Composer
- Node.js 18+
- MySQL 8
- Redis

