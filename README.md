## Blogging Application Build in Laravel Framework

**php artisan make:model Post -mcr** is used to create Post Model, PostController and Post migration
**php artisan make:model Comment -mcr** is used to create Comment Model, CommentController and Comment migration

**User composer require laravel/breeze --dev** command for insalling laravel-breeze package 

**Reason for using Laravel-Breeze
  - It provides a simple authentication system including login, registration, and session handling.
  -  It’s a perfect fit for CRUD-based projects like your blog.

###For populating Dummy Data we can use following command

**For Populating User and Post Data**
>php artisan db:seed   

**For User Data only**
>php artisan db:seed --class=UserSeeder

*Dummy Login details are*
email:  admin@gmail.com
Password: password

**For Post Data only**
>php artisan db:seed --class=PostSeeder

### Listing of All Post
![Listing of All Post](image.png)

### View Post and Comment
![View Post and Comment](image-1.png)

### View Post with Comment and comment count
![View Post with Comment and comment count](image-2.png)

### Login Form
![Login Form](image-3.png)

### Listing of Blog (After Successfully Login..)

![Listing of Blog](image-4.png)

### Create Post Form
![Create Post Form](image-5.png)

### Error Message on duplicate title (Form Validation)

![Error Message on duplicate title](image-6.png)

### Success Message on Post Create
![Success Message on Post Create](image-7.png)

### View page for particular post
![View Page](image-8.png)

### Edit Page
![Edit Page](image-9.png)

### Error Handling on duplicate Title in Edit form
![Error Handling](image-10.png)

### Pop Up(Alert Box) on delete button click 

![Alert Box before deleting post](image-11.png)

> I used soft deletes so that the data will not actually be deleted from the database..


**Designed and Developed By**
*Kapil Dev*
[kapil.d687@gmail.com]
