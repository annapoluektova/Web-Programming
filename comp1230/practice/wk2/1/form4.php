<?php

$color_id=$_GET['color_id'];
$bgcolor='';
// blue, green, brown, orange, red
if ($color_id==1)
{
  $bgcolor='blue';
}
else if ($color_id==2)
{
  $bgcolor='green';
}
else if ($color_id==3)
{
  $bgcolor='brown';
}
else if ($color_id==4)
{
  $bgcolor='orange';
}
else if ($color_id==5)
{
  $bgcolor='red';
}
?>


 <html>

 <head>
  <title>Drop_on</title>
</head>
<body bgcolor='<?php echo $bgcolor;?>'>
  
 <form method="get" action="">
 
<select name="color_id">
  <option value="1">blue</option>
  <option value="2">green</option>
  <option value="3">brown</option>
  <option value="4">orange</option>
  <option value="5">red</option>
</select>
	     <input type='submit' size='10' maxlength='10' /> 
	
 </form>
 
    <pre>
      <?php
        var_dump($_GET);
      ?>
    </pre>

</body>


</html>