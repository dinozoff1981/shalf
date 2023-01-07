<?php
//$connect = new PDO("mysql:host=localhost;dbname=folder", "root", "");

//$connect = new mysqli('localhost','root','','folder');


$connect=new mysqli("db4free.net","shalom","@Jerry304870","shalomdb");


if(!$connect){
  die('Connection Failed'. mysqli_connect_error($connect));
}

?>