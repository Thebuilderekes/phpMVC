<?php


if ($_SERVER['SERVER_NAME'] == 'localhost') {

define('DBNAME', 'devblog');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBDRIVER', '');

    define('ROOT', 'http://localhost/MVC/public/');
} else {
    
define('DBNAME', 'devblog');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBDRIVER', '');
    define('ROOT', 'https://yourwebsitename.com');
}