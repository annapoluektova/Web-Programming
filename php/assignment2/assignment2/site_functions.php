<?php
function _get($name)
  {
      return (isset($_GET[$name]) && !empty($_GET[$name]) ? $_GET[$name] : '');      
  }

function printAllContacts() {
	$link = mysqli_connect('localhost','root','','gbsbe');
	$query = "SELECT id, fname, lname, email, phone, facebook, twitter FROM users";
	$result = mysqli_query($link,$query);

	echo "<table border='1'><tr><td>ID</td><td>First_name</td><td>Last_name</td><td>Email</td><td>Phone</td><td>Facebook</td><td>Twitter</td><td>Modify</td><td>Delete</td></tr>";
	while( $row = mysqli_fetch_array($result) ){
	echo "<tr><td>" . $row[0] . "&nbsp;</td>
	<td>"  . $row[1] . "&nbsp;</td>
	<td>" . $row[2] . "&nbsp;</td>
	<td>"  . $row[3] . "&nbsp;</td>
	<td>" . $row[4] . "&nbsp;</td>
	<td>" . $row[5] . "&nbsp;</td>
	<td>" . $row[6] . "&nbsp;</td>
	<td>" . "<a href='modify_user_page.php?id=$row[0]&fname=$row[1]&lname=$row[2]&email=$row[3]&phone=$row[4]&facebook=$row[5]&twitter=$row[6]'>Modify</a>" . "</td>" .
	"<td><a href='delete_user_page.php?id=$row[0]' onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
	}
	echo "</table>";
  }
  
  function printContact($id) {
	$link = mysqli_connect('localhost','root','','gbsbe');
	$id=_POST('id');
	$query = "SELECT fname, lname, email, phone, facebook, twitter FROM users WHERE id=$id";
	$result = mysqli_query($link,$query);

	echo "<table border='1'><tr><td>First_name</td><td>Last_name</td><td>Email</td><td>Phone</td><td>Facebook</td><td>Twitter</td><td>Modify</td><td>Delete</td></tr>";
	while( $row = mysqli_fetch_array($result) ){
	echo "<tr><td>" . $row[0] . "&nbsp;</td>
	<td>"  . $row[1] . "&nbsp;</td>
	<td>" . $row[2] . "&nbsp;</td>
	<td>"  . $row[3] . "&nbsp;</td>
	<td>" . $row[4] . "&nbsp;</td>
	<td>" . $row[5] . "&nbsp;</td>
	<td>" . "<a href='modify_page.php?id=$id&fname=$row[0]&lname=$row[1]&email=$row[2]&phone=$row[3]&facebook=$row[4]&twitter=$row[5]'>Modify</a>" . "</td>" .
	"<td><a href='delete_page.php?id=$id' onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
	}
	echo "</table>";
  }
  
  
  
  