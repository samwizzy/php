<?php
// PDO
$pdo = new PDO("mysql:host=localhost;port=3308;dbname=php_mvc", 'root', '');
 
// mysqli, procedural way
$mysqli = mysqli_connect('localhost','root','','php_mvc','3308');
 
// mysqli, object oriented way
$mysqli = new mysqli('localhost','root','','php_mvc','3308');

?>