# Building an MVC framework using OOP PHP
This is an MVC framework in OOP. The idea of this project is to enforce my php knowledge in OOP which is a continuation of my studies from the ```php-concepts``` repository where i learn some important foundational topics in PHP OOP.

## Setup
I have XAMMP running on my linux machine which sets up local server along side mysql for the database communication. 

## Folder structure.
   
├── MVC
│   ├── app
│   │   ├── core
│   │   │   ├── config.php
│   │   │   ├── functions.php
│   │   │   ├── Database.php
│   │   │   ├── App.php
│   │   │   ├── Model.php
│   │   │   ├── Controller.php
│   │   │   ├── init.php
│   │   ├── controllers
│   │   ├── _404.php
│   │   ├── Home.php
│   ├── notes.md
│   ├── README.md
│   ├── public
│   │   ├── index.php

The ``_404.php`` file in the `app/controllers`folder starts with an underscore because that is a valid naming convention for a class.  
The core folder contains files that will always be loaded.
The `init.php` file has all the files in the core folder thatv are require through out the project.
In the app/controller.php file we create a conroller class and logic to be used to decide what view is to be loaded 

