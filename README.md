# [Codestacker Challenges] Frontend Development challenge Quiz

[DEMO](https://drive.google.com/file/d/1hyQtj-JqFS1rRfg59GJpnSztKgRpKq-C/view?usp=drivesdk)

This project is an online quiz contain 12 qestion, created using laravel, sqlite, tailwind, Alpine.js and javascript.
-Elegant clean style.
-Responsive.

## Installation

Use composer, and npm to install the project, full commands list:

```bash
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan db:seed
npm install
npm run dev
php artisan storage:link
```

## Usage

user can choose between enter a name and start a new quiz or visit the board that will display top 10 users.

## Tools used and why
- This project used **SQLlite** -not in the initial relese- to help deploy the project without need to configure laravel with mysql database.
- **Tailwind**: Tailwind CSS is a utility-first CSS (Cascading Style Sheets) framework with predefined classes that you can use to build and design web pages directly in your markup. It lets you write CSS in your HTML in the form of predefined classes.
- **Alpine.js**: Alpine is a rugged, minimal tool for composing behavior directly in your markup. Think of it like jQuery for the modern web. Plop in a script tag and get going.  Alpine. js comes in at 21.9kB minified and 7.1kB gzipped, compared to jQuery at 87.6kB minified and 30.4kB minified and gzipped.
