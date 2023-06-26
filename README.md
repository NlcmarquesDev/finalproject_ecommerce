<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About My Project Ecommerce

This is a repository that contains the source code of my e-commerce project developed in Laravel. The objective of this project is to create a functional and intuitive e-commerce platform to facilitate the sale and purchase of products online,within what was our teaching and using some of the technologies listed below.

-   [Laravel](https://laravel.com/).
-   [Livewire](https://laravel-livewire.com/).
-   [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/).
-   [MySql](https://www.mysql.com/).

## Main Functionalities

-   User registration and authentication.
-   Display of products in different categories.
-   Adding products to the shopping cart.
-   Secure and intuitive checkout process.
-   Order history for users.
-   Admin panel to manage products, orders and users.

## Installation Requirements

-   Clone this repository to your local machine.
-   Run the composer install command to install the project's dependencies.

```
   npm install && composer install
```

-   Create MySQL database and update the connection settings in the .env file.

```
APP_NAME=LaravelEcommerce
```

For Mac Users only

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=dbfinalproject_ecommerce
DB_USERNAME=root
DB_PASSWORD=root

FILESYSTEM_DISK=public
```

For Windows

```
DB_DATABASE=dbfinalproject_ecommerce

FILESYSTEM_DISK=public
```

For MailTrap

```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
```

Mailchimp

```
LIST_ID_MAILCHIMP =
API_KEY_MAILCHIMP =
```

Google CLient Developer

```
GOOGLE_CLIENT_ID =
GOOGLE_CLIENT_SECRET =
```

Mollie CLient Developer

```
MOLLIE_KEY=
```

-   Create the app_key for the project

```
php artisan key:generate
```

-   Perform database migrations with the php artisan migrate command.
-   Start the development server with the php artisan serve command, and run dev

```
npm run dev
```

```
php artisan serve
```

-   Access the application in your browser through the address http://localhost:8000.

-   Feel free to explore the source code and adapt the project to your needs. If you have any questions or suggestions, please don't hesitate to contact us.

Enjoy developing your e-commerce in Laravel and good luck!
