# Laravel with MongoDB Project

A Laravel project configured to use MongoDB as the primary database, demonstrating the integration between Laravel and MongoDB using the `mongodb/laravel-mongodb` package.

## Requirements

-   PHP >= 8.2
-   MongoDB Server
-   Composer
-   Node.js & NPM
-   Laravel CLI

## Installation

1. Clone the repository:

```bash
git clone https://github.com/amr-94/laravel-with-mongoDB.git
cd laravel-with-mongoDB
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install JavaScript dependencies:

```bash
npm install
```

4. Copy the environment file:

```bash
cp .env.example .env
```

5. Configure your MongoDB connection in `.env`:

```env
DB_CONNECTION=mongodb
DB_URI=mongodb://localhost:27017
DB_DATABASE=myapp
```

6. Generate application key:

```bash
php artisan key:generate
```

7. Build frontend assets:

```bash
npm run build
```

## Features

-   MongoDB Integration using `mongodb/laravel-mongodb` package
-   Basic Post Model with MongoDB support
-   User Authentication with MongoDB
-   Profile Model with One-to-One relationship example
-   Tailwind CSS for styling
-   Vite for asset bundling

## Project Structure

-   `app/Models/Post.php` - Post model configured for MongoDB
-   `app/Models/User.php` - User model with MongoDB support
-   `app/Models/Profile.php` - Profile model for user profiles
-   `database/migrations/` - Database migrations for MongoDB collections
-   `routes/web.php` - Web routes including test endpoints

## Available Routes

-   `/` - Welcome page
-   `/test` - Test endpoint for creating and retrieving posts
-   `/user` - Test endpoint for user creation
-   `/test-one-to-one` - Test endpoint for demonstrating one-to-one relationships

## Development

Run the development server:

```bash
php artisan serve
```

Watch for asset changes:

```bash
npm run dev
```

## Testing

Run tests using PHPUnit:

```bash
php artisan test
```

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the MIT License.
