# Example Company CMP
This is full-stack application that uses [this html template](https://github.com/19XLR95/example-company-website-template-2).

It is responsive and has i18n (EN & TR) support. *Login* doesn't work, you should set database config in *.env* file. The project have built with PHP and [Laravel](https://laravel.com/).

The goal is to create a customer monitor panel. When your customer hire you to build a website for him/her. This project allows your customer to display preview of the website while you build it. Your customer can preview your work for example day to day or week to week.

To run the project:
Copy *.env.example* file in the same location and rename it as *.env* then run the following commands.
```
composer install
php artisan key:generate
php artisan serve
```
