<?php
function _get($name)
  {
      return (isset($_GET[$name]) && !empty($_GET[$name]) ? $_GET[$name] : '');      
  }

  function printContact($user_id) {
    //connecting to the database
	$link = mysqli_connect('localhost','j3pteam6_admin','fZ5V_uZ(2Hu(','j3pteam6_gbsbe');
	//assign the id
	$id = $user_id;
	//we select fields such as username, first name, last name, e-mail, phone,
	//facebook, and twitter by $id.
	$query = "SELECT uname, fname, lname, email, phone, facebook, twitter FROM users WHERE id=$id";
	$result = mysqli_query($link,$query);
    //we draw a table with named fields.
	//we can modify and delete contact information with Modify and Delete links.
	echo "<table class='table table-bordered table-condensed' border='1'>";
	while( $row = mysqli_fetch_array($result) ){
	echo "<tr><td>Username&nbsp;</td><td>" . $row[0] . "&nbsp;</td></tr>
	      <tr><td>First Name&nbsp;</td><td>" . $row[1] . "&nbsp;</td></tr>
		  <tr><td>Last Name&nbsp;</td><td>" . $row[2] . "&nbsp;</td></tr>
		  <tr><td>Email&nbsp;</td><td>" . $row[3] . "&nbsp;</td></tr>
		  <tr><td>Phone&nbsp;</td><td>" . $row[4] . "&nbsp;</td></tr>
		  <tr><td>Facebook&nbsp;</td><td>" . $row[5] . "&nbsp;</td></tr>
		  <tr><td>Twitter&nbsp;</td><td>" . $row[6] . "&nbsp;</td></tr>
		  <tr><td>Modify&nbsp;</td><td><a href='modify_contact.php?id=$id&uname=$row[0]&fname=$row[1]&lname=$row[2]&email=$row[3]&phone=$row[4]&facebook=$row[5]&twitter=$row[6]'>Modify</a></td></tr>
		  <tr><td>Delete&nbsp;</td><td><a href='delete_contact.php?id=$id' onclick=\"return confirm('Are you sure you want to delete? If you delete your contact info, your books info will also be deleted!')\">Delete</a></td></tr>";
	}
	echo "</table>";
	//returning to the main page index.php if we click on the Back button.
	echo "<a href='index.php' class='btn'>Back</a>";
  }
  
  
  
  