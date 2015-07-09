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
  <ul>
    <li><a href='index2.php?color_id=1'>blue</a></li>
	<li><a href='index2.php?color_id=2'>green</a></li>
	<li><a href='index2.php?color_id=3'>brown</a></li>
	<li><a href='index2.php?color_id=4'>orange</a></li>
	<li><a href='index2.php?color_id=5'>red</a></li>
  </ul>
    <pre>
      <?php
        var_dump($_GET);
      ?>
    </pre>
  </body>
  
</html>