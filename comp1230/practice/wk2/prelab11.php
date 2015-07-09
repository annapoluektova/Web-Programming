<html>
	<head>
		<title>
		</title>
	</head>
	<body>
	           <h1>prelab1</h1>
	           
	
	<form action="" method="get">
	   <input type="hidden" name="firstname"value="Anna" />
	   <input type="hidden" name="lastname" value="Poluektova" />
	   <input type="hidden" name="studentID"value="100786356" />
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
			
			 color: <input type='text' name='color' /><br />
	   <input type="submit" value="submit"name="submitted" />
		
	
	<?php
	 if(isset($_GET['submitted']))
	 {
	   echo '<h1>' . $_GET['firstname'] .$_GET['lastname'] . ':' . $_GET['studentID'] . '</h1>';
	  echo '<table>'; //table
			for ($x=0; $x<$_GET['rows']; $x++)
			{
			  echo '<tr>';
			  for ($y=0;$y<$_GET['columns'];$y++)
			  {
			   echo'<td cellpadding="1" style="border:1px solid '.$_GET['color'].';">';
			   if ($x%2)//check even or odd
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
	
	   
	  
	
	
	</body>
</html>