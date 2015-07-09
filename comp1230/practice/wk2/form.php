<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operator=$_GET['operator'];
if ($operator=='+')
{
  echo $n1 . $operator . $n2 . "=" . ($n1+$n2); 
}
else if ($operator=='-')
{
  echo $n1 . $operator . $n2 . "=" . ($n1-$n2); 
}
else if ($operator=='*')
{
  echo $n1 . $operator . $n2 . "=" . ($n1*$n2); 
}
else if ($operator=='/')
{
  echo $n1 . $operator . $n2 . "=" . ($n1/$n2); 
}
?>
<html>
  <head>
    <title></title>
  </head>
    
 <body>
  
 <form method="get" action="form.php">
   <input type="text" name="n1" />
 <select type="dropdown" name="operator">
  <option value ="+">+</option>
  <option value ="-" >-</option>
  <option value ="*">*</option>
  <option value ="/">/</option>
</select>
   <input type="text" name="n2" /> 
   

 <input type='submit' /> 
	
 </form>
 
    <pre>
      <?php
        var_dump($_GET);
      ?>
    </pre>

</body>
</html>