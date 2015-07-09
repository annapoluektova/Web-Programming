<?php
$color_id=4;
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
    <title></title>
  </head>
    
  <body bgcolor='<?php echo $bgcolor;?>'>

  </body>
  
</html>