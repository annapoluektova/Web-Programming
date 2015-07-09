<?php
require 'site_functions.php';
//getting the id
$id = _get('id');
//connecting to the database
$link = mysqli_connect('localhost','j3pteam6_admin','fZ5V_uZ(2Hu(','j3pteam6_gbsbe');
   //we delete his/her information in the table 'users'.
   $query = "DELETE FROM users WHERE id = $id";
   mysqli_query($link,$query);
   //we delete his/her information in the table 'books'.
   $query2 = "DELETE FROM books WHERE user_id = $id";
   mysqli_query($link,$query2);
   //LOGOUT
header('location: logout.php');
exit();