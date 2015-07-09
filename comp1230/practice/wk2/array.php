<?php
$numbers = array(2,5,6,8,10,22,9,12,33,151);
print $numbers[0] . "<br />";
echo end($numbers) . "<br />";
print $numbers[count($numbers)-1] . "<br />";
print $numbers[(count($numbers)-1)/2] . "<br />";

  $i=0;
  $sum=0;
  for ($i=0; $i<count($numbers); $i=$i+1)
    {
      $sum=$sum+$numbers[$i];
    }
     echo "$sum" . "<br />";
     
  $i=count($numbers)-1;
  for ($i=count($numbers)-1; $i>=0; $i=$i-1)
    {
      echo $numbers[$i] . "," . "\t";
    }
?>
<html>
  <head>
    <title></title>
  </head>
    
  <body>
    <h1>Anna Poluektova</h1>
  </body>
  
</html>