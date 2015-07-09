<?php
   $bgcolor = 'red';
   $handle = fopen('color.txt','r');

   if($handle)
   {
      $bgcolor = fread($handle,  filesize('color.txt'));
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
