## Live Demo Site

View a demo of the app at [this heroku page](https://peaceful-eyrie-92477.herokuapp.com/).

## Development Environment

This project runs on (Linux, APACHE & PHP). Using Laravel 5.8 with React Preset.

## Set Up

#### Clone the repository:

```bash
git clone https://github.com/shk33/boeing-page.git
```

#### Create your environment file:
```bash
cp .env.example .env
```

#### Install PHP dependencies:

```bash
composer install
```

*If you don't have Composer installed, [instructions here](https://getcomposer.org/).*

#### Generate an app key:
```bash
php artisan key:generate
```

#### Install Javascript dependencies:
```bash
npm install
```

*If you don't have Node and NPM installed, [instructions here](https://www.npmjs.com/get-npm).*

#### Run an initial build:
```bash
npm run dev
```

#### Run locally:
```bash
php artisan serve
```