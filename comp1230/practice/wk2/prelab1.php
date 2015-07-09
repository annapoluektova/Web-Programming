<?php
	 if(isset($_GET['submitted']))
	 {
	   echo '<h1>' . " " .$_GET['first_name'] . " " . $_GET['last_name'] . " " .':' . " " . $_GET['student_id'] . '</h1>';
	  echo '<table>';
			for ($r=0; $r<$_GET['rows']; $r++)
			{
			  echo '<tr>';
			  for ($c=0;$c<$_GET['columns'];$c++)
			  {
			   echo'<td cellpadding="1" style="border:1px solid '.$_GET['color'].';">';
			   if ($r%2)
			   {
			   echo $_GET['last_name'];
			   }
			   else
			   {
				 echo $_GET['first_name'];
			   }
			   echo '</td>';
			  }
			  echo '</tr>';
			}
	    echo '</table>';
	  }
 ?>
<html>
    <head>
      <title>Prelab_1</title>
    </head>
        <body>
         <br /><br />
	  <form action=" " method="get">
	     <input type="hidden" name="first_name" value="Anna" />
	     <input type="hidden" name="last_name" value="Poluektova" />
	     <input type="hidden" name="student_id" value="100786356" />
	        ROWS: <select name="rows">
	                 <option value='1'>1</option>
	                 <option value='2'>2</option>
	                 <option value='3'>3</option>
		         <option value='4'>4</option>
		         <option value='5'>5</option>
		         <option value='6'>6</option>
			 <option value='7'>7</option>
			 <option value='8'>8</option>
			 <option value='9'>9</option>
			 <option value='10'>10</option>
		      </select>
                <br /><br />
  	     COLUMNS: <select name="columns">
	                 <option value='1'>1</option>
	                 <option value='2'>2</option>
		         <option value='3'>3</option>
		         <option value='4'>4</option>
		         <option value='5'>5</option>
		         <option value='6'>6</option>
			 <option value='7'>7</option>
			 <option value='8'>8</option>
			 <option value='9'>9</option>
			 <option value='10'>10</option>
   	              </select>
                <br /><br />
    COLOR: <input type="text" name="color" />
                <br /><br />
	   <input type="submit" value="submit" name="submitted" />

	</body>
</html>