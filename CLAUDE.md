# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Commands

### Main Development
- `composer dev` - Start full development environment (server, queue, logs, and vite)
- `php artisan serve` - Start Laravel development server
- `npm run dev` - Start Vite development server for frontend assets

### Testing
- `composer test` - Run full test suite (clears config and runs PHPUnit)
- `php artisan test` - Run PHPUnit tests directly
- `php artisan test --filter=TestName` - Run specific test

### Code Quality
- `vendor/bin/pint` - Laravel Pint code formatter (PSR-12 compliance)

### Build & Assets  
- `npm run build` - Build frontend assets for production
- `php artisan config:cache` - Cache configuration for production
- `php artisan route:cache` - Cache routes for production

### Database
- `php artisan migrate` - Run database migrations
- `php artisan migrate:fresh --seed` - Fresh migration with seeders
- `php artisan tinker` - Interactive PHP shell

## Architecture Overview

This is a Laravel 12 application using:
- **Frontend**: Vite + Tailwind CSS 4.0 for asset compilation and styling
- **Database**: SQLite (default) with Eloquent ORM
- **Testing**: PHPUnit with Feature and Unit test suites
- **Queue**: Database-backed queue system
- **Session**: Database-backed sessions

### Key Directories
- `app/` - Application logic (Controllers, Models, Providers)
- `resources/` - Views, CSS, JS assets
- `database/` - Migrations, seeders, factories
- `tests/` - PHPUnit tests (Feature and Unit)
- `config/` - Laravel configuration files
- `routes/` - Route definitions (web.php, console.php)

### Environment Setup
- Copy `.env.example` to `.env` and configure
- Default database is SQLite (`database/database.sqlite`)
- Key generation: `php artisan key:generate`

### Composer Scripts
The project uses several useful Composer scripts defined in `composer.json`:
- `composer dev` runs a concurrent setup with server, queue, logs, and Vite
- `composer test` includes config clearing before running tests