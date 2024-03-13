
# Develeoping An Ecommerce Web Application

Welcome to our E-Commerce Web Application project! This README file contains comprehensive instructions on setting up, deploying, and utilizing our application.


## Table Of Contents

 - [Introduction](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Features](https://github.com/matiassingers/awesome-readme)
 - [Technologies Used](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)
  - [Setup Instructions](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)
   - [Deployment on AWS EC2](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)




## API Reference

#### Get all items

```http
  GET /api/items
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **Required**. Your API key |

#### Get item

```http
  GET /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### add(num1, num2)

Takes two numbers and returns the sum.

