# Full Store eCommerce

This project is a comprehensive eCommerce platform built using the Laravel framework and MySQL. It provides a full-featured online store experience, including user authentication, product management, category management, and filtering capabilities.

## Screenshots

![photo1](https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/4e31486e-4f36-43fb-84a7-41ea4575c41f)
<img width="1676" alt="photo2" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/4bdf0b83-07ab-4df0-b774-7104d6a5c52a">
<img width="1656" alt="photo3" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/17be1653-8b69-4bf2-99ca-2b6fbc3a620a">
<img width="1634" alt="photo4" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/13882b90-112a-49f4-bb22-d536db7e8b65">
<img width="1667" alt="photo5" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/e161766b-731d-4b10-a22f-87022d595503">
<img width="1676" alt="photo6" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/140f8da7-4fe6-4dd9-a854-a98e984cd7b8">
<img width="1685" alt="photo7" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/b2cc7d03-624f-43c1-b0ce-8d93ed6a7172">
<img width="1704" alt="photo8" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/a404d8cb-08d4-4c53-820f-0f58355288a3">
<img width="416" alt="photo9" src="https://github.com/NlcmarquesDev/finalproject_ecommerce/assets/111293493/c2aece43-0866-4730-a8e9-22307717bbab">

## Features

-   User Authentication: Secure login and registration system for users.
-   Product Management: Admins can add, edit, and delete products from the store.
-   Category Management: Admins can manage product categories to organize the store.
-   User Management: Admins can manage users and their roles within the platform.
-   Product Filters: Users can filter products based on categories, price, and other attributes.
-   Order history for users.
-   Admin panel to manage products, orders and users.
-   Database Storage: All data is stored securely in a MySQL database.
-   MVC Architecture: The project follows the Model-View-Controller (MVC) design pattern for organized and maintainable code.

## Installation

Clone the repository:

```bash
Copy code
git clone https://github.com/yourusername/full-store-ecommerce.git
```

Navigate into the project directory:

```bash
Copy code
cd full-store-ecommerce
```

Install dependencies:

```bash
Copy code
composer install
npm install
```

### Create a MySQL database and import the ecommerce.sql file.

Configure the .env file with your database credentials:
dotenv

```Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

Run database migrations:

```bash
Copy code
php artisan migrate
php artisan db:seed
```

Serve the application:

```bash
Copy code
php artisan serve
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

Create the app_key for the project

```
php artisan key:generate
```

### Usage

To browse products, navigate to the homepage and explore various categories.
To add a product to your cart, click the "Add to Cart" button on the product page.
To view your cart, click on the "Cart" link in the navigation menu.
To manage the store, access the admin dashboard where you can add, edit, or delete products and categories.
To filter products, use the filter options available on the product listing pages.

## Notes

This project is a comprehensive eCommerce platform but may require additional security measures before production use.
You can extend the project with additional features such as payment integration, order tracking, and more.

## Tech Stack

-   Client: HTML, CSS, JavaScript, Blade (Laravel's templating engine)
-   Server: PHP (Laravel framework)
-   Database: MySQL

### Authors

José Nuno Marques - @NlcmarquesDev

#### About Me

Hello there! 👋 I'm José Nuno Marques, a passionate and enthusiastic Junior Full Stack Developer with a strong desire to create web applications. I love combining my problem-solving skills with cutting-edge technologies to build robust and user-friendly software solutions. This README file serves as a brief introduction to my background, skills, and projects.

### Badges

Add badges from somewhere like: shields.io

### License

This project is licensed under the MIT License.
