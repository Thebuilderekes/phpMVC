<?php

function show($item){

	echo "<pre>";
	print_r($item);
	echo "</pre>";
}

$URL = $_GET['url'] ?? 'home';
$URL = explode("/", $URL);

show($URL);
