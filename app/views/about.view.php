<?php
echo "this is about view page now";

var_dump($_SERVER);
foreach ($_SERVER as $key => $value) {
    echo "<h2>$key</h2>";
}