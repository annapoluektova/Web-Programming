<?php
   $handle = fopen('color.txt','r');

   if($handle)
   {
       while(!feof($handle))
       {
            print  fgets($handle) . PHP_EOL . '<br />';
       }     
      fclose($handle);
      
   } 
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
