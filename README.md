#Installation

This is a laravel 5.2 application.

Clone the repository.

Install [Composer](https://getcomposer.org/) the Php dependency manager 

After open cmd within the app folder

run `composer install`

The app dependencies will then be installed.

**Rename the .env.example file to .env**

And change the Database credentials to reflect the ones on your machine.

After you will have to run the migration so that the Todo table is inserted in the database.

`php artisan migrate`

Lastly to launch the app run 

`php artisan serve`

By default it will open on **port 8000**, in case you want a different port run

`php artisan serve --port=portnumber`

Finally check it out in the browser.

For any inquiries email: johnkagga@gmail.com


