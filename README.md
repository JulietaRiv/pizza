# Pizza Challenge

It consists in create pizzas with determined ingredients.

It includes an ingredients index view, with the list of ingredients, a button to add a new one (with a very basic form) and a delete button foreach. 
Also includes a pizzas index view, with add and delete buttons, and the capability of edition too (Re using the same form). 

The database schema includes 2 main tables (ingredients and pizzas) and a pivot table to maneging the many to many relationship.

To provide dummy data to start, i added 2 seeder files. And also due the porposes of this development, i added a request file with a basic validation.
And to give it some visual aesthetic, i used adminlte.


## Pre requisites

php<br> 
git<br>
composer (with all the Composer and Laravel dependencies)


## How To Use

```bash
# Clone this repository
$ git clone https://github.com/JulietaRiv/pizza

# Go into the repository
$ cd pizza

# Copy .env.example file
$ cp .env.example .env

# Install sail dependencies
$ composer install

# Start the app
$./vendor/bin/sail up

# Run migrations and seeders
$ sail artisan migrate --seed

# Install dependencies of the container
$ sail composer install

# open browser http://localhost/pizzas
```

> **Note**
> Then you will have a basic dummy data to make the app work <br> <br>


## Challenge 
Web app test

Introduction

● Write a web application as described below.
● Your code should work. Code design, accordance to standards and style will also be
evaluated.
● You may use the libraries of your choice, as far as you specify those as installation
requirements (with instructions if applicable) and use Laravel as a base framework.
● Presence of any kind of tests will be evaluated as well.
● The response must be emailed back at most 48h after receiving this document.
● No questions will be answered. If you have any questions, just choose a sensible answer
and document your assumptions in your response.
● Don’t worry if you don’t manage to do it all, this is just to get a feeling of what you are
capable of!
● If you have some time left after completing the requirements, and you want to implement
some extra features (orders, delivery, etc.), you are free to do so, as long as you
document them.

Deliverables
• Source code of your application.
o We are happy with code handed in a ​zip file​, but we like it even better when we
get access to a github repository​.
o We know how to use composer, npm... so don’t bother including ALL the external
libraries you use.

• Installation steps, including all installation requirements like libraries, etc.
• If applicable, SQL for the creation of the data model and some sample data to test your
application.

Requirements
The application will allow the users to manage a small catalog of pizzas and the ingredients
needed to bake them. In particular, users must be able to add and remove the ingredients of an
existing pizza (and if possible give those ingredients an order of appearance).
On the front-end side, the usage of JavaScript for the integration is required.
● Ingredients
○ An ingredient has a name and a cost price.
● Pizzas
○ A pizza has a name, a selling price and is made from several ingredients.
The selling price of a pizza equals the total of all its ingredients plus 50% of the total for the
preparation.
● Examples:
○ The Fun Pizza is made of the following ingredients:
■ tomato - 0.5 eur
■ sliced mushrooms - 0.5 eur
■ feta cheese - 1.0 eur
■ sausages - 1.0 eur
■ sliced onion - 0.5 eur
■ mozzarella cheese - 0.5 eur
■ oregano 1 eur
■ Total Price = 7.5 eur
○ The Super Mushroom Pizza has a layer of mushrooms on top, and is made of
these ingredients:
■ tomato - 0.5 eur
■ bacon - 1.0 eur
■ mozzarella cheese - 0.5 eur
■ sliced mushrooms - 0.5 eur
■ oregano - 1.0 eur
■ Total Price = 5.25 eur

Good luck!


## Autor ✒️

* **Julieta Riv** - https://github.com/JulietaRiv


## Versions 📌

php 8.1<br>
laravel "^9.19"


 😊
