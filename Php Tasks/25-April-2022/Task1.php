<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 
//Task 1 #######################

    $year=2024;
    if(($year%4)=== 0)
    echo "This year is  a leap year";
    else
    echo "This year is not a leap year";
//##############################
    echo "<br>".str_repeat("#",15)."<br>";
//Task 2 #######################
$temp=21;
   if ($temp>20)
   echo "it's a Summer time";
   else 
   echo "it's a winter time";
  
//##############################
 echo "<br>".str_repeat("#",15)."<br>";
//Task 3 #######################
$num1=5;
$num2=5;
if ($num1==$num2)
echo ($num1+$num2)*3;
else
echo $num1+$num2;
//##############################
 echo "<br>".str_repeat("#",15)."<br>";
//Task 4  #######################
 
$fnum=10;
$lnum=10;
if($fnum+$lnum == 30)
echo "the Sum of Number 1 and Number 2 is:".$fnum+$lnum;
else 
echo "false";

//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 5  #######################
 
$pnum=20;
if ($pnum%3==0)
echo "true";
else 
echo "false";

//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 6  #######################
 
$intnum=50;
if ($intnum>=20 && $intnum<=50)
echo "true";
else 
echo "false";
//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 7  #######################
 $num_1=1;
 $num_2=5;
 $num_3=9;
 if($num_1>$num_2 && $num_1>$num_3 )
 echo $num_1;
 elseif ($num_2>$num_1 && $num_2>$num_3)
 echo $num_2;
 elseif ($num_3>$num_1 && $num_3>$num_2)
 echo $num_3;
 else 
 echo "all number is ".$num_1;
//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 8  #######################

$unit=150;
if($unit>0&&$unit<=50)
echo $unit*2.50 . " JOD";
elseif ($unit>50&&$unit<=150)
echo $unit*5 . " JOD";
elseif ($unit>150&&$unit<=250)
echo $unit*6.20 . " JOD";
elseif ($unit>250)
echo $unit*7.50 . " JOD";

//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 9  #######################

$age=18;
if ($age>=18)
echo "is eligible to vote";
else
echo "is not eligible to vote";
//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 10  #######################
$number=0;
if ($number>0)
echo "the Number is positive ";
elseif($number<0)
echo "the Number is negative";
else 
echo "the Number is zero";
//##############################
echo "<br>".str_repeat("#",15)."<br>";
//Task 11  #######################
$number1=10;
$number2=10;
$oberation="*";
if ($oberation=="+")
echo $number1+$number2;
elseif ($oberation=="-")
echo $number1-$number2;
elseif ($oberation=="*")
echo $number1*$number2;
elseif ($oberation=="/")
echo $number1/$number2;
//##############################
echo "<br>".str_repeat("#",16)."<br>";
//Task 12  #######################
$grade=90;
switch ($grade) {
    case ($grade <60) :
        echo "your Grade is F";
        break;
        case ($grade<70):
            echo "your Grade is D";
            break;
            case ($grade<80):
                echo "your Grade is C";
                break;
                case( $grade<90):
                    echo "your Grade is B";
                    break;
                    case ($grade>=90):
                        echo "your Grade is A";
                        break;
                    
    
}
    ?>

    
</body>
</html>