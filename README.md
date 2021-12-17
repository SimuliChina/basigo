<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Steps to run the app

Install the dependencies using the command `npm install` and `npm run dev`

Once the dependencies are installed:
1. Make a database and update the .env environment file with the DB name and username `DB_DATABASE, DB_USERNAME`
2. Run migrations and seeder with the command `php artisan migrate --seed`
3. Launch the php-server using the command `php artisan serve`


## Testing the API (I tested the API using Postman)

### Getting the list of all leads/customers

GET - `http://localhost/api/leads`
GET - `http://localhost/api/customers`

### Storing a lead or customer

POST - `http://localhost/api/leads`
POST - `http://localhost/api/customers`

Headers:
	Accept: application/json
	Content-Type: application/ecmascript
Form data (in json format):
	<insert key value pairs of the attributes>

### Retrieve a specific customer or lead

GET - `http://localhost/api/leads/{lead_id}`
GET - `http://localhost/api/customers/{customer_id}`

The response `{
    "message": "Record successfully added.",
    "status": 201
}`

## Design decisions

Authentication is implemented using laravel's built in authentication scafolding.
Used role-based authentication since we have 2 roles, as defined in the brief: leadCreator and customerCreator.
Since these roles have been defined, we can use them to restrict some areas of the applications or performing of certain functions.

Instead of storing products as a comma separated attribute for customers, I made Product an entity and created a one to many relationship between cutomers and products. A product belongs to many customers; a customer has one product. This calls for a pivot table (customer_product) for easy access.

## Issues

The app as is has no views. Only the API that enables viewing and creating of the different entities has been implemented. Given more time, I would complete the task by creating vue components for my SPA which consume the Laravel API.

A customer has a picture as an attribute which I have not added. I would store these pictures in AWS' S3 and store the link to the image in the database.

I did not seed the customer's table as that is supposed to be populated from the leads. The API therefore returns an empty response. One can however create the records through the API

