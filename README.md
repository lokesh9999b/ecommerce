
# Ecommerce Web Application

Welcome to My E-Commerce Web Application project! This README file contains comprehensive instructions on setting up, deploying, and utilizing the application.


## Table Of Contents

 - [Introduction](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#introduction)
 - [Features](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#features)
 - [Technologies Used](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#technologies-used)
  - [Database Schema And Setup Instructions](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#database-schema-and-setup-instructions)
  - [Application Preview](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#application-preview)
   - [Deployment on AWS EC2](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#deployment-on-aws-ec2)
   - [Access PHP Myadmin](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#to-access-phpmyadmin)
   - [Access Deployed Application](https://github.com/lokesh9999b/ecommerce/blob/main/README.md#to-access-application)




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

![schema](https://github.com/lokesh9999b/ecommerce/assets/87296735/532dc027-7b99-4e43-a986-96be4913a18a)



### Setup Instructions

- To setup the database, I had installed Apache server (Xampp) in the system.
- After installing the Apache server (Xampp), Created the database called ecommerce.
- After creating the databse ecommerce now I had imported the ecommerce.sql file into the ecommerce data base 
- Then I will get all the tables and schema into local Apache server.
- Now I have to connect the database to the application, By changing the username and passwords in common.php file. 
# Application Preview
## User Login
### User Registration Page

In user registration page, create's account in just a few simple steps by entering required data as shown in the below picture.

![Screenshot (292)](https://github.com/lokesh9999b/ecommerce/assets/87296735/f77ccc06-b088-4754-b084-03b3d0dc1a56)



### Login Page

In login page, We can access account securely to explore the products and manage shopping experience effortlessly.

![Screenshot (293)](https://github.com/lokesh9999b/ecommerce/assets/87296735/d718fa58-e302-43d3-8e2f-79fed620e62e)



### Home Page
In home page, We have navigation bar, Products category.

![Screenshot (295)](https://github.com/lokesh9999b/ecommerce/assets/87296735/3a6cfeb1-a504-4987-8864-81d412997d0c)


### Products Page

In products page we have different product details like Product image, Product name, Product price.

![Screenshot (296)](https://github.com/lokesh9999b/ecommerce/assets/87296735/9269234a-a612-4744-b9dd-b4b5630d0702)


### User Profile 

In user profile page we will get the deatils of the logined user details like Name, Email, Phone, etc.

![Screenshot (297)](https://github.com/lokesh9999b/ecommerce/assets/87296735/ec560797-e2fa-4e14-b472-857e5bc15b8e)


### Cart
In this page we will view the products he have added to the cart, And total price for all the products we have added into the cart and we have a confirm button to place the order for the products.

![Screenshot (299)](https://github.com/lokesh9999b/ecommerce/assets/87296735/3987567c-8deb-44f3-b4cf-8e0722a54392)

## Admin Login
### Login Page
In this page only admin can access this page.

![Screenshot (300)](https://github.com/lokesh9999b/ecommerce/assets/87296735/01a3caf5-a6c3-4a94-8a4f-667dedd65ee4)


### Home Page
In admin home page, We found navigation bar, Products category for edit the product details.

![Screenshot (301)](https://github.com/lokesh9999b/ecommerce/assets/87296735/59b13974-fca1-4ab0-bcc8-263fc6c1c847)


### Product Edit Page

In this product edit page the admin can able to edit the product data, And able to delete the product and add the new product in that product category.

![Screenshot (303)](https://github.com/lokesh9999b/ecommerce/assets/87296735/ba528bc5-ebb9-459e-9077-4e1a6c503830)


### Users List
In this page we can able to view all the users in the Application.

![Screenshot (309)](https://github.com/lokesh9999b/ecommerce/assets/87296735/2b5f326e-1ccd-40fb-812a-b6b58139dc9d)


### Orders 

In this page the Admin can able to view all the orders placed by the users.

![Screenshot (311)](https://github.com/lokesh9999b/ecommerce/assets/87296735/0b9e82d0-7c05-4281-a9fd-f35de1b036c9)


## Deployment on AWS EC2



- To deploy PHP application along with PHPMyAdmin on an AWS EC2 instance, I have followed these steps

### Launch an EC2 Instance
- I have used the AWS Management Console to launch an EC2 instance, And selected ubuntu AMI.
### Install Apache, MySQL, and PHP
- Connect to the EC2 instance using SSH and install Apache, MySQL, and PHP
```
sudo apt update
```
```
sudo apt install apache2 php mysql-server php-mysql
```
- Install PHPMyAdmin to manage MySQL database
```
sudo apt install phpmyadmin
```
- During installation, choose Apache as the web server to configure PHPMyAdmin to work with Apache

- After installation, configure PHPMyAdmin to work with  MySQL database
```
sudo nano /etc/apache2/apache2.conf
```
```
Include /etc/phpmyadmin/apache.conf
```
- Restart Apache to apply the changes
```
sudo systemctl restart apache2
```
### To Access PHPMyAdmin
- PHPMyAdmin should now be accessible at  http://3.108.242.180/phpmyadmin/

- Log in using MySQL username and password as follows
- **usernmame**: newuser
- **Password**: lokesh999
### Upload PHP Application in Ubuntu ec2 Instance
- Upload PHP application files to the /var/www/html directory
- To deploy application files we have to follow below mentioned steps:
```
sudo su
```

```
yum update
```

```
mkdir app
```

```
wget "github repository link"
```

```
ls -lrt
```

```
unzip zipfile name
```

```
cd Folder name
```
```
mv * /var/www/html
```

- To list out application files we can use the following command
- 
```
ls -lrt
```

- In this way we can upload application files into Ec2 instance
### To Access Application

- Application can be accessible at
- **User Login**: http://3.108.242.180    
  
- **Admin Login**: http://3.108.242.180/admin
- Admin Login Credientials:
- **Username**: praneeth
- **Password**: 1234




