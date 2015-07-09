<?php
	 if(isset($_GET['submit']))
	 {
	    
           $len= strlen(trim($_GET['n1']));
            if ($len==0)
            {   
             echo 'empty ';
            
            }
            else
            {    
                $total_even_nums = 0;
                $total_odd_nums = 0;
                $total_nums = 0;
                $valid_numbers = "";
                $invalid_numbers = "";
                $num_array = array();
                $txt_array = array();
                $temp_array = explode("\n",$_GET['n1']);
               // unset($temp_array[count($temp_array)-1]);
                foreach ($temp_array as $value)
                {
                    if ($value){
                    if(!filter_var($value, FILTER_VALIDATE_INT))
                    {
                        $invalid_numbers = $invalid_numbers . " " . $value . "\n";
 //                       $txt_array[$j]=$value;
 //                       $j++;
                    }
                    else
                    {
                
                            if(($value)%2)
                            {
                                $total_odd_nums = $total_odd_nums + $value;
                            }
                            else
                            {
                                $total_even_nums = $total_even_nums + $value;
                            }
                            $total_nums = $total_nums + $value;
                            $valid_numbers = $valid_numbers . " " . $value . "\n";
                            
 //                        $num_array[$i]=$value;
 //                        $i++;
                    }
                    }
                }
                
                $myFile = "reportFile.txt";
                $fh = fopen($myFile, 'w') or die("can't open file");
                $stringData = "---------REPORT---(".date("Y-m-d").")---------\n";
                $stringData = $stringData."                    Values \n".$valid_numbers;
                $stringData = $stringData."Total Lines in Textarea = ".count($temp_array)."\n";
                $stringData = $stringData."Total of All Numbers = ".$total_nums."\n";
                $stringData = $stringData."Total of odd numbers = ".$total_odd_nums."\n";
                $stringData = $stringData."Total of even numbers = ".$total_even_nums."\n"; 
                $stringData = $stringData."---------INVALID NUMBERS\n".$invalid_numbers; 
                fwrite($fh, $stringData);   
                if (file_exists('reportFile.txt'))
                    print nl2br(file_get_contents('reportFile.txt'));
                fclose($fh);

            }
	  }
 ?>
<html>
  <head>
    <title></title>
  </head>
    
  <body>
    	  <form action=" " method="get">
              <label for="numtextarea">  Numbers: </label>
              <textarea rows="" cols="80" name="n1" value="" id="numtextarea">

              </textarea>                <br /><br />
	   <input type="submit" value="submit" name="submit" />

  </body>
  
</html>