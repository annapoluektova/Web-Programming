<?php
  function _get($name)
  {
      return (isset($_GET[$name]) && !empty($_GET[$name]) ? $_GET[$name] : '');      
  }
  
  if(_get('submit'))
  {
      $first_name = _get('first_name');
      $last_name = _get('last_name');
      $fin = fopen('students.txt','a');
      if($fin)
      {
          $record = $first_name . ',' . $last_name . PHP_EOL;
          fputs($fin, $record);
          fclose($fin);
      }
  }
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table border='1'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        <?php
        //print file_get_contents('students.txt');
          $handle = fopen('students.txt', 'r');
          while(!feof($handle))
          {
              $student = fgets($handle);
              $data = explode(',', $student);
              print '<tr><td>' . $data[0] . '</td><td>' . $data[1] . '</td></tr>' ;
          }
        
        ?>
        </table>
        <form>
            First name:<input type='text' name='first_name' />
            Last name:<input type='text' name='last_name' />
            <input type='submit' name='submit' />.
        </form>
    </body>
</html>
