<?php
require 'site_functions.php';
?>
<?php
   $id = _get('id');
   $fname = _get('fname');
   $lname = _get('lname');
   $email = _get('email');
   $phone = _get('phone');
   $facebook = _get('facebook');
   $twitter = _get('twitter');
?>
<form action="edit_contact.php" method="">   
    <input  type="hidden" name="record_id" value="<?php echo $id; ?>" /><br /><br />
    First_name: <input  type="text" name="fname" value="<?php echo $fname; ?>" /><br /><br />
    Last_name: <input  type="text" name="lname" value="<?php echo $lname; ?>" /><br /><br />
    Email: <input  type="text" name="email" value="<?php echo $email; ?>" /><br /><br />
    Phone: <input  type="text" name="phone" value="<?php echo $phone; ?>" /><br /><br />
    Facebook: <input  type="text" name="facebook" value="<?php echo $facebook; ?>" /><br /><br />
    Twitter: <input  type="text" name="twitter" value="<?php echo $twitter; ?>" /><br /><br />
    <input type='submit' name='modify' value="modify" /><br /><br />
</form> 