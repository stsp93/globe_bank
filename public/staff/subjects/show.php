<?php 
$id = $_GET['id'] ?? '1'; //nullish coalescing; IF PHP < 7.0 use ternary operator

echo $id;

?>