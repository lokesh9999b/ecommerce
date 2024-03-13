
# Ecommerce Web Application

Welcome to our E-Commerce Web Application project! This README file contains comprehensive instructions on setting up, deploying, and utilizing our application.


## Table Of Contents

 - [Introduction](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#introduction)
 - [Features](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#features)
 - [Technologies Used](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)
  - [Database Schema And Setup Instructions](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)
  - [Application View](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)
   - [Deployment on AWS EC2](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)




## Introduction

This E-Commerce Web Application is designed to provide users with a seamless shopping experience. It offers features such as browsing products, adding items to the cart, user authentication, secure checkout, and administrative functionalities. Built with PHP, MySQL, HTML, CSS, and JavaScript, This application ensures security, scalability, and user-friendliness.
## Features

 - User-friendly interface with responsive design
 - User authentication using JWT (JSON Web Tokens)
 - Product browsing, viewing, and adding to cart
 - Secure checkout process for order placement
 - Administrative functionalities for managing products
 - Database operations for user and product management

## Technologies Used

- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Authentication: JWT (JSON Web Tokens)
- Hosting: AWS EC2
## Database Schema And Setup Instructions

 ### Database Schema 
The database schema I have designed for the Ecommerce Apllication as shown in the below picture


### Setup Instructions

- To setup the database we have to install Apache server (Xampp) in our system.
- After installing the Apache server (Xampp), Create the database called ecommerce.
- After creating the databse ecommerce now import the ecommerce.sql file into the ecommerce data base 
- Now we will get all the tables and schema into our local Apache server.
- Now we have to connect the database to our application, By changing the username and passwords in common.php file. 
# Application View
## User Login
### User Registration Page

On our user registration page, create your account in just a few simple steps by entering required data as shown in the below picture.


### Login Page

On our login page, access your account securely to explore our products and manage your shopping experience effortlessly.


### Home Page
On our home page, We have navigation bar, Products category.

### Products Page

On our products page we have different product details like Product image, Product name, Product price.

### User Profile 

On the user profile page we will get the deatils of the logined user details like Name, Email, Phone, etc.

### Cart
On this page we will view the products he have added to the cart, And total price for all the products we have added into the cart and we have a coform button to place the order for the products.

## Admin Login
### Login Page
On this page only admin can access this page.

### Home Page
On admin home page, We found navigation bar, Products category for edit the product details.

### Product Edit Page

On this product edit page the admin can able to edit the product data, And able to delete the product and add the new product in that product category.

### Users List
On this page we can able to view all the users in the Application.

### Orders 

On this page the Admin can able to view all the orders placed by the users.


