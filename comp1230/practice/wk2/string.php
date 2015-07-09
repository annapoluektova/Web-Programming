<?php
  $first_name = "Anna";
  $last_name = "Poluektova";
  $year_born = 1986;
  $current_year = 2013;
 
?>
<html>
  <head>
    <title></title>
  </head>
    
  <body>
    <h1>Anna Poluektova</h1>
	<?php
	 $age = ($current_year - $year_born);
	  print ("First name is:" . $first_name . "and Last name is:" . $last_name . "." . "I am" . $age . "years old.");
	?>
  </body>
  
</html>