# Full Store eCommerce
This project is a comprehensive eCommerce platform built using the Laravel framework and MySQL. It provides a full-featured online store experience, including user authentication, product management, category management, and filtering capabilities.

## Screenshots



## Features
- User Authentication: Secure login and registration system for users.
- Product Management: Admins can add, edit, and delete products from the store.
- Category Management: Admins can manage product categories to organize the store.
- User Management: Admins can manage users and their roles within the platform.
- Product Filters: Users can filter products based on categories, price, and other attributes.
- Order history for users.
- Admin panel to manage products, orders and users.
- Database Storage: All data is stored securely in a MySQL database.
- MVC Architecture: The project follows the Model-View-Controller (MVC) design pattern for organized and maintainable code.


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
- Client: HTML, CSS, JavaScript, Blade (Laravel's templating engine)
- Server: PHP (Laravel framework)
- Database: MySQL


### Authors
José Nuno Marques - @NlcmarquesDev

 #### About Me
Hello there! 👋 I'm José Nuno Marques, a passionate and enthusiastic Junior Full Stack Developer with a strong desire to create web applications. I love combining my problem-solving skills with cutting-edge technologies to build robust and user-friendly software solutions. This README file serves as a brief introduction to my background, skills, and projects.

### Badges
Add badges from somewhere like: shields.io

### License
This project is licensed under the MIT License.

