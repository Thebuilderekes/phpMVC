<?php


$string = "mysql:hostname"=.DBHOST.";dbname=".DBNAME;
$con = new PDO($string,DBUSER,DBPASS);