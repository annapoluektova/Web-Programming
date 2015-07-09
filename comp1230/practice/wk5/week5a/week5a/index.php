<?php
  // $handle = fopen('color.txt','w');
   //$handle = fopen('color.txt','a') or die('cannot open file');
   $handle = fopen('color.txt','a');
   if($handle)
   {
    fwrite($handle,'this is first line to this file' . PHP_EOL);
    fwrite($handle,'this is second line to this file');
    $data = PHP_EOL . 'this is last line';
    fwrite($handle, $data);        
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
