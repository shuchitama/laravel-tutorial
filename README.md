# Laravel and PHP tutorial

This project follows [this tutorial](https://www.youtube.com/watch?v=BXiHvgrJfkg&ab_channel=Bitfumes). It is a basic todo application with user authentication, where you can create an account and add a todo list associated with your account. You can add items to your list, mark them as complete or incomplete, update list items, or delete items. You can also add an avatar for your profile by uploading an image.

## Getting started

1. Fork this repository, then clone your fork of this repository.

2. Install dependencies using the `npm install` command, followed by the `composer install` command.

3. Rename the .env.example file in the root directory as .env and then run `php artisan key:generate` in the terminal. This will generate a value for APP_KEY variable in the .env file. 

4. In the .env file, set the DB_DATABASE variable to "laravel_tutorial" (without quotation marks).

5. Start the web server using the `php artisan serve` command. The app will be served at http://127.0.0.1:8000.

6. Go to http://127.0.0.1:8000 in your browser.

## Screenshots

Registration page:
![Register](https://github.com/shuchitama/laravel-tutorial/blob/master/docs/register.png?raw=true)

Adding new todos: 

!["Add new todos"](https://github.com/shuchitama/laravel-tutorial/blob/master/docs/new%20task.gif?raw=true)


Complete and remove completed todos:

!["Complete Todos"](https://github.com/shuchitama/laravel-tutorial/blob/master/docs/complete.gif?raw=true)


Update a todo:

!["Update Todo"](https://github.com/shuchitama/laravel-tutorial/blob/master/docs/update.gif?raw=true)


Delete a todo:

!["Delete Todo"](https://github.com/shuchitama/laravel-tutorial/blob/master/docs/delete.gif?raw=true)