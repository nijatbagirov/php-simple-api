# Php simple Api 
# Database

```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);
```

##  API

| API                     |    CRUD    |                                Description |
| :---------------------- | :--------: | -----------------------------------------: |
| GET /index.php          |  **READ**  |        Get all the Users from `users` table |
| GET /single.php?id=1    |  **READ**  |        Get a single User from `users` table |
| POST /create            | **CREATE** | Create a User and insert into `users` table |

Test the API endpoints using [Postman](https://www.postman.com/).
