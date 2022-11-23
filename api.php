<?php

$name = $_POST["name"]??"world";
header("Content-Type: application/json");
echo "{\"hello\":\"${name}\"}";