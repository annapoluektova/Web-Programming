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
    <title></title>
  </head>
    
  <body bgcolor='<?php echo $bgcolor;?>'>
    <pre>
      <?php
        var_dump($_GET);
      ?>
    </pre>
  </body>
  
</html>