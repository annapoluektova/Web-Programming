<?php
require 'site_functions.php';
   $id = _get('record_id');
   $fname = _get('fname');
   $lname = _get('lname');
   $email = _get('email');
   $phone = _get('phone');
   $facebook = _get('facebook');
   $twitter = _get('twitter');
   $link = mysqli_connect('localhost','root','','gbsbe');
   $query = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', phone = '$phone',
            facebook = '$facebook', twitter = '$twitter'
            WHERE id = $id";
   mysqli_query($link,$query);
   echo '<meta http-equiv="refresh" content="0;URL=all_users.php">';