<?php
$number=17;
?>
<html>
  <head>
    <title></title>
  </head>
    
  <body>
    <h1>Anna Poluektova</h1>
    <?php
    if (($number%2)==0)
    {
     print "$number" . " " . "it is an even number";
    }
    else if (($number%2)!=0)
    {
     print "$number" . " " . "it is an odd number";
    }
    print "<br />";
    ?>
    <?php
    $numbers=3;
    $message = (($numbers%2)==0) ? "$numbers" . " " . "it is an even number" : "$numbers" . " " . "it is an odd number";
    print "$message";
    print "<br />";
    ?>
    <?php
    $mark = 58;
    if (($mark>=0) && ($mark<35))
    {
    print "$mark" . " " . "it is F-";
    }
    elseif (($mark>=35) && ($mark<42))
    {
    print "$mark" . " " . "it is F";
    }
    elseif (($mark>=42) && ($mark<50))
    {
    print "$mark" . " " . "it is F+";
    }
    elseif (($mark>=50) && ($mark<53))
    {
    print "$mark" . " " . "it is D-";
    }
    elseif (($mark>=53) && ($mark<57))
    {
    print "$mark" . " " . "it is D";
    }
    elseif (($mark>=57) && ($mark<60))
    {
    print "$mark" . " " . "it is D+";
    }
    elseif (($mark>=60) && ($mark<63))
    {
    print "$mark" . " " . "it is C-";
    }
    elseif (($mark>=63) && ($mark<67))
    {
    print "$mark" . " " . "it is C";
    }
    elseif (($mark>=67) && ($mark<70))
    {
    print "$mark" . " " . "it is C+";
    }
    elseif (($mark>=70) && ($mark<73))
    {
    print "$mark" . " " . "it is B-";
    }
    elseif (($mark>=73) && ($mark<77))
    {
    print "$mark" . " " . "it is B";
    }
    elseif (($mark>=77) && ($mark<80))
    {
    print "$mark" . " " . "it is B+";
    }
    elseif (($mark>=80) && ($mark<85))
    {
    print "$mark" . " " . "it is A-";
    }
    elseif (($mark>=85) && ($mark<90))
    {
    print "$mark" . " " . "it is A";
    }
    elseif (($mark>=90) && ($mark<=100))
    {
    print "$mark" . " " . "it is A+";
    }
    print "<br />";
    ?>
    <?php
    $marks = 65;
    switch($marks)
    {
    case (($marks>=0) && ($marks<35)):
    {
    print "$marks" . " " . "it is F-";
    break;
    }
    case (($marks>=35) && ($marks<42)):
    {
    print "$marks" . " " . "it is F";
    break;
    }
    case (($marks>=42) && ($marks<50)):
    {
    print "$marks" . " " . "it is F+";
    break;
    }
    case (($marks>=50) && ($marks<53)):
    {
    print "$marks" . " " . "it is D-";
    break;
    }
    case (($marks>=53) && ($marks<57)):
    {
    print "$marks" . " " . "it is D";
    break;
    }
    case (($marks>=57) && ($marks<60)):
    {
    print "$marks" . " " . "it is D+";
    break;
    }
    case (($marks>=60) && ($marks<63)):
    {
    print "$marks" . " " . "it is C-";
    break;
    }
    case (($marks>=63) && ($marks<67)):
    {
    print "$marks" . " " . "it is C";
    break;
    }
    case (($marks>=67) && ($marks<70)):
    {
    print "$marks" . " " . "it is C+";
    break;
    }
    case (($marks>=70) && ($marks<73)):
    {
    print "$marks" . " " . "it is B-";
    break;
    }
    case (($marks>=73) && ($marks<77)):
    {
    print "$marks" . " " . "it is B";
    break;
    }
    case (($marks>=77) && ($marks<80)):
    {
    print "$marks" . " " . "it is B+";
    break;
    }
    case (($marks>=80) && ($marks<85)):
    {
    print "$marks" . " " . "it is A-";
    break;
    }
    case (($marks>=85) && ($marks<90)):
    {
    print "$marks" . " " . "it is A";
    break;
    }
    case (($marks>=90) && ($marks<=100)):
    {
    print "$marks" . " " . "it is A+";
    break;
    }
    }
?>
  </body>
  
</html>