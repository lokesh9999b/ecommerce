
# Ecommerce Web Application

Welcome to our E-Commerce Web Application project! This README file contains comprehensive instructions on setting up, deploying, and utilizing our application.


## Table Of Contents

 - [Introduction](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#introduction)
 - [Features](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#features)
 - [Technologies Used](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#technologies-used)
  - [Database Schema And Setup Instructions](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#database-schema-and-setup-instructions)
  - [Application View](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#application-view)
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

![Screenshot (292)](https://github.com/lokesh9999b/ecommerce/assets/87296735/f77ccc06-b088-4754-b084-03b3d0dc1a56)



### Login Page

On our login page, access your account securely to explore our products and manage your shopping experience effortlessly.
![Screenshot (293)](https://github.com/lokesh9999b/ecommerce/assets/87296735/d718fa58-e302-43d3-8e2f-79fed620e62e)



### Home Page
On our home page, We have navigation bar, Products category.
![Screenshot (295)](https://github.com/lokesh9999b/ecommerce/assets/87296735/3a6cfeb1-a504-4987-8864-81d412997d0c)


### Products Page

On our products page we have different product details like Product image, Product name, Product price.
![Screenshot (296)](https://github.com/lokesh9999b/ecommerce/assets/87296735/9269234a-a612-4744-b9dd-b4b5630d0702)


### User Profile 

On the user profile page we will get the deatils of the logined user details like Name, Email, Phone, etc.
![Screenshot (297)](https://github.com/lokesh9999b/ecommerce/assets/87296735/ec560797-e2fa-4e14-b472-857e5bc15b8e)


### Cart
On this page we will view the products he have added to the cart, And total price for all the products we have added into the cart and we have a coform button to place the order for the products.

![Screenshot (299)](https://github.com/lokesh9999b/ecommerce/assets/87296735/3987567c-8deb-44f3-b4cf-8e0722a54392)

## Admin Login
### Login Page
On this page only admin can access this page.
![Screenshot (300)](https://github.com/lokesh9999b/ecommerce/assets/87296735/01a3caf5-a6c3-4a94-8a4f-667dedd65ee4)


### Home Page
On admin home page, We found navigation bar, Products category for edit the product details.
![Screenshot (301)](https://github.com/lokesh9999b/ecommerce/assets/87296735/59b13974-fca1-4ab0-bcc8-263fc6c1c847)


### Product Edit Page

On this product edit page the admin can able to edit the product data, And able to delete the product and add the new product in that product category.
![Screenshot (303)](https://github.com/lokesh9999b/ecommerce/assets/87296735/ba528bc5-ebb9-459e-9077-4e1a6c503830)


### Users List
On this page we can able to view all the users in the Application.
![Screenshot (309)](https://github.com/lokesh9999b/ecommerce/assets/87296735/2b5f326e-1ccd-40fb-812a-b6b58139dc9d)


### Orders 

On this page the Admin can able to view all the orders placed by the users.
![Screenshot (311)](https://github.com/lokesh9999b/ecommerce/assets/87296735/0b9e82d0-7c05-4281-a9fd-f35de1b036c9)



