<?php
function generate_randoms($amt) {
                    $randoms = array();
                    for ($i=0; $i < $amt; $i++) {   
                    
                        $randoms[]=mt_rand();
                    }
                    return $randoms;
                }  
?>
<html>
  <head>
    <title></title>
  </head>
    
  <body>
    	  <form action="" method="post">
              Amount:
              <input type="text" name="amount" value="" />                
              <br />
	   <input type="submit" value="submit" name="submit" />
          </form>
 <?php
	   if(isset($_POST['submit']))
	   {  
              $len = $_POST['amount'];
              if ($len==0 || $len < 0)
              {   
                 echo '<br />Please enter your numbers';
              }
              else
              {        
                $total_nums = generate_randoms($_POST['amount']);
                $total_even = "";
                $myFile = "even.txt";
                $fh = fopen($myFile, 'w') or die("can't open file");
                for ($i=0; $i < count($total_nums); $i++)
                {
                    if(($total_nums[$i])%2 == 0)
                   {
                  fwrite($fh, $total_nums[$i] . PHP_EOL);
                   }
                     
                   print $total_nums[$i];       
                            
                               
            
                    
               
                }
                 fclose($fh);
               }   
         }
	  
 ?>
  </body>
  
</html>