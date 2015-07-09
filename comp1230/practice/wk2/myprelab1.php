<html>
	<head>
		<title>
		</title>
	</head>
	<body>
	
	<?php echo "<h1>Biswajit Saha</h1>";
	      print "<h2>January 20, 2013</h2>";
	?>
	<?php
	 if(isset($_GET['submitted']))
	 {
	   echo '<h1>' . $_GET['firstname'] . $_GET['lastname'] . ':' . $_GET['stid'] . '</h1>';
	  echo '<table>'; //table
			for ($r=0; $r<$_GET['rows']; $r++)
			{
			  echo '<tr>';
			  for ($c=0;$c<$_GET['columns'];$c++)
			  {
			   echo'<td cellpadding="1" style="border:1px solid '.$_GET['color'].';">';
			   if ($r%2)//check even or odd
			   {
			   echo $_GET['lastname'];
			   //echo first
			   
			   }
			   else
			   
			   {
			   //echo last
				 echo $_GET['firstname'];
			   }
			   echo '</td>';
			  }
			  echo '</tr>';
			}
	    echo '</table>';
	  }
	?>
	
	   <form action="" method="get">
	   <input type="hidden" name="firstname"value="Avi" />
	   <input type="hidden" name="lastname" value="Saha" />
	   <input type="hidden" name="stid"value="100855096" />
	   Rows: <select name="rows">
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
				</select><br />
				columns: <select name="columns">
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
				</select><br />
	   color: <input type='text' name='color' /><br />
	   <input type="submit" value="submit"name="submitted" />
	
	
	</body>
</html>