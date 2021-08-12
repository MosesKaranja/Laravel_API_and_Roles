## About Repo

This is a simple api that comes in Laravel And can peroform all CRUD requirements for a certain model.
On top of that security has been added to the api using tokens from the package Laravel Sanctum.
And also we have decided to add Roles and Permissions functionality from the Laravel Package Spatie


## Running The Project
First remember to run the Seeder called PermissionsDemoSeeder, this sets up the Roles and Permissions which you will assign to users instead of creating them all the time when a user registers. 

Now you will just assign a user a role when a user registers. 

In order to run any route remember to add Accept --- application/json to your Headers in Postman. 

Also remember to first register or login and obtain the token. You will then add the token to Authorization - Bearer Token to the other routes otherwise they will reject your request.



## The Routes

#InsertProduct Route
http://127.0.0.1:8000/api/products  ---- POST

Parameters required are 4 but description is optional:name, slug, description, price. 

#GetProducts Route
http://127.0.0.1:8000/api/products  ---- GET

No Parameters are required

#register Route
http://127.0.0.1:8000/api/register ---- POST

Parameters required are 4: name, email, password, password_confirmation 

#login Route
http://127.0.0.1:8000/api/login ---- POST

Parameters required are 2: email, password

#logout Route
http://127.0.0.1:8000/api/logout ---- POST

No Parameter are required

#GetProductById
http://127.0.0.1:8000/api/products/{id} ----GET


No Parameters are required

#SearchProductByName
http://127.0.0.1:8000/api/products/search/{name} ---- GET

No Parameters are required here

#DeleteProductById
http://127.0.0.1:8000/api/products/{id} ---- DELETE

No Parameters are required here

#UpdateProduct
http://127.0.0.1:8000/api/products/{id} ---- PUT

No Parameters are required here. 
