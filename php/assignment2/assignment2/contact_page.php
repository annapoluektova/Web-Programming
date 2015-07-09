<?php
require 'site_functions.php';
?>
<form action="" method="get">        
    <input  type="text" name="id" value="" /><br /><br />
    <input type='submit' name='show' value="show" /><br /><br />

</form> 
<?php
if(_get('show'))
     {
       contact($_GET['id']);
     }
?>
