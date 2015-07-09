<?php
require 'site_functions.php';
?>
<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="utf-8">
		<title>Register Page</title>
	</head>
	<body>
<form action="" method="get">        
    <input  type="hidden" name="id" value="" /><br /><br />
    Username: <input type="text" name="username" value="" /><br /><br />
    Password: <input type="text" name="password" value="" /><br /><br />
    First_name: <input type="text" name="fname" value=""  /><br /><br />
    Last_name: <input type="text" name="lname" value=""  /><br /><br />
    E-mail: <input type="text" name="email" value=""  /><br /><br />
    Phone: <input type="text" name="phone" value=""  /><br /><br />
    Facebook: <input type="text" name="facebook" value=""  /><br /><br />
    Twitter: <input type="text" name="twitter" value=""  /><br /><br />
    <input type="hidden" name="status" value=""  /><br /><br />
    <input type='submit' name='add' value="add" /><br /><br />
</form>         
<?php
   if(isset($_REQUEST['add']) && $_REQUEST['add'])
     {
         $link = mysqli_connect('localhost','root','','gbsbe');
 if (mysqli_connect_error())
 {
     print "cannot connect to database";
     die();
 }
   define("SALT", 'abcdefg');
   $username = mysqli_real_escape_string($link, $_REQUEST['username']);
   $password = hash('sha512', mysqli_real_escape_string($link, $_REQUEST['password']) . "SALT");
   $fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
   $lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
   $email = mysqli_real_escape_string($link, $_REQUEST['email']);
   $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
   $facebook = mysqli_real_escape_string($link, $_REQUEST['facebook']);
   $twitter = mysqli_real_escape_string($link, $_REQUEST['twitter']);
   
   $query = "INSERT INTO users SET username = '$username', password = '$password',
                                   fname = '$fname', lname = '$lname', email = '$email',
                                   phone = '$phone', facebook = '$facebook', twitter = '$twitter'";

   mysqli_query($link,$query);
     }
?>
        </body>
</html>