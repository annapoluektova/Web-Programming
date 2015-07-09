<?php
$color_id=$_GET['color_id'];
$bgcolor='';
// blue, green, brown, orange, red
switch($color_id)
{
case 1:
{
  $bgcolor='blue';
  break;
}
case 2:
{
  $bgcolor='green';
  break;
}
case 3:
{
  $bgcolor='brown';
  break;
}
case 4:
{
  $bgcolor='orange';
  break;
}
case 5:
{
  $bgcolor='red';
}
}
?>
 <html>

 <head>
  <title>Drop on</title>
</head>
<body bgcolor='<?php echo $bgcolor;?>'>
 <form>
  <table>
    <tr>
       <td>
	     <input type='checkbox' name='index2.php?color_id=1' value='1' />
	   </td>
	   <td>
	     <input type='checkbox' name='index2.php?color_id=2' value='1' />
	   </td>
	   <td>
	     <input type='checkbox' name='index2.php?color_id=3' value='1' />
	   </td>
	   <td>
	     <input type='checkbox' name='index2.php?color_id=4' value='1' /> 
	   </td>
	   <td>
	     <input type='checkbox' name='index2.php?color_id=5' value='1' /> 
	   </td>
	</tr>
		<tr>
	   <td colspan='5'>
	     <input type='submit' name='submit' value='click here' size='10' maxlength='10' /> 
	   </td>
	</tr>
 </table>

 </form>  

     <pre>
      <?php
        var_dump($_GET);
      ?>
    </pre>
</body>


</html>