<?php
   $bgcolor = 'red';
   $handle = fopen('color.txt','r');

   if($handle)
   {
      print  fread($handle,  1) . PHP_EOL;
      print  fread($handle,  1) . PHP_EOL;
      print  fread($handle,  1) . PHP_EOL;
      print  fread($handle,  1) . PHP_EOL;
      print  fread($handle,  1) . PHP_EOL;
      fclose($handle);
      
   } 
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor='<?php echo $bgcolor?>'>
        <?php
        // put your code here
        ?>
    </body>
</html>
