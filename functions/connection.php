<?php

function connect_database(){
   $servername = 'localhost';
   $username = 'root';
   $password = 'root';
   $db_name = 'market';

   return $conn = new mysqli($servername,$username,$password,$db_name);
}




?>