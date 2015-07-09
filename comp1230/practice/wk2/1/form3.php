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
  <title>Radio_button</title>
</head>
<body bgcolor='<?php echo $bgcolor;?>'>
 <form action="" method="GET">
 	     blue <input type='radio' name='color_id' value='1' />
	     green <input type='radio' name='color_id' value='2' />
	     brown <input type='radio' name='color_id' value='3' />
	     orange <input type='radio' name='color_id' value='4' /> 
	     red <input type='radio' name='color_id' value='5' /> 		 
<input type='submit' size='10' maxlength='10' /> 
	     
	 </form>  

</body>


</html>