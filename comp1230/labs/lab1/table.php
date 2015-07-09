<?php
	 if(isset($_GET['submited']))
	 {
	  echo '<table>';
			for ($r=0; $r<$_GET['rows']; $r++)
			{
			  echo '<tr>';
			  for ($c=0;$c<$_GET['columns'];$c++)
			  {
			   echo'<td style="border: 1px solid black;">';
			   echo $_GET['name'];
			   echo '</td>';
			  }
			  echo '</tr>';
			}
	    echo '</table>';
	  }