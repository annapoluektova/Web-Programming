<?php
$name = "Anna";
$is_valid = true;
$price = 100.65;
$age = 26;
define ("HST", .13);
?>

<html>
  <head>
    <title></title>
  </head>
    
  <body>
    <h1>Anna Poluektova</h1>
<?php
  print $name . "<br />";
  print  $is_valid . "<br />";
  print $age . "<br />";
  print $price . "<br />";
  print HST . "<br />";
?>
  </body>
  
</html>