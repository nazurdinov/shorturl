## Url shortener

 
###Service start command:
 *docker-compose up --build*
 
GET: http://localhost/api/v1/shorturls

Response CODE(200):  
```
[
    {
        "id": 4,
        "slug": "GYeBDLm",
        "link": "https://yandex.ru",
        "created_at": "2019-04-14 07:36:01",
        "updated_at": "2019-04-14 11:51:41"
    },
    {
        "id": 14,
        "slug": "45gYIfa",
        "link": "http://test.ru",
        "created_at": "2019-04-14 11:44:14",
        "updated_at": "2019-04-14 11:44:14"
    },
    {
        "id": 15,
        "slug": "2TN85Sz",
        "link": "http://facebook.com",
        "created_at": "2019-04-14 17:59:59",
        "updated_at": "2019-04-14 17:59:59"
    }
]
```

GET: http://localhost/api/v1/shorturls/4

Response CODE(200):  
```
{
    "id": 4,
    "slug": "GYeBDLm",
    "link": "https://yandex.ru",
    "created_at": "2019-04-14 07:36:01",
    "updated_at": "2019-04-14 11:51:41"
}
```

POST: http://localhost/api/v1/shorturls

Request:
```
{
    "link": "http://instagram.com"
}
```
Response CODE(201):  
```
{
    "link": "http://instagram.com",
    "slug": "6eypKL5",
    "updated_at": "2019-04-14 18:24:21",
    "created_at": "2019-04-14 18:24:21",
    "id": 16
}
```

PUT: http://localhost/api/v1/shorturls/4

Request:
```
{
	"link": "https://yandex.rus"
}
```
Response CODE(200):  
```
{
    "id": 4,
    "slug": "9FlkCaO",
    "link": "https://yandex.rus",
    "created_at": "2019-04-14 07:36:01",
    "updated_at": "2019-04-14 18:24:40"
}
```

DELETE: http://localhost/api/v1/shorturls/4

Response CODE(204): 