<?php
require 'site_functions.php';
$id=_get('id');
$link = mysqli_connect('localhost','root','','gbsbe');
   $query = "DELETE FROM users WHERE id = $id";
   mysqli_query($link,$query);
echo '<meta http-equiv="refresh" content="0;URL=view_contact.php">';