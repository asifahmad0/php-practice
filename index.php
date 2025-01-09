<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo " <center><h1 style='color:green;'>hii, my name is anam</h1></center>"; //single line comment
/*$a=5;
$b=6;
$c=$a+$b; // multy line comment
echo"<br>", $c;
*/

//Arthimatict orpator and varible 
// $a = 10; // ($a and $b) indecate varible
// $b = 5;

 
// echo " 10 + 5 = ", $a+$b , "<br>";
// echo " 10 - 5 = ", $a-$b, "<br>";
// echo " 10 * 5 = ", $a*$b, "<br>";
// echo " 10 / 5 = ", $a/$b, "<br><br>";

//Asinment orpator and varible, asine value to a varible
 
// $a +=2;
// echo  $a, "+", $b," = ", $a+$b , "<br>";
// $a -=2;
// echo $a, "+", $b," = ", $a-$b, "<br>";
// $a *=2;
// echo $a, "+", $b," = ", $a*$b, "<br>";
// $a /=2;
// echo $a, "+", $b," = ", $a/$b, "<br>"; 


//camperison oprator and varible, asine value to a varible

// $first_varible = 5;
// $second_varible = 6;


// echo var_dump( $first_varible == $second_varible), "<br>";
// echo var_dump( $first_varible <= $second_varible), "<br>";
// echo var_dump( $first_varible >= $second_varible), "<br>";
// echo var_dump( $first_varible != $second_varible), "<br>";

//incriment/decriment oprator and varible, asine value to a varible

// $first_varible--;
// echo $first_varible, "<br>";
// $first_varible++;
// echo $first_varible, "<br>";


// and (&&)
// or(||)
// xor
// not (!)

// $myVar1a=(true && false);
// $myVar1b=(true && true);
// $myVar1c=(false && false);
// echo var_dump($myVar1a), "<br>";
// echo var_dump($myVar1b),"<br>";
// echo var_dump($myVar1c),"<br>", "<br>";

// $myVar2a=(true or false);
// $myVar2b=(false or false);
// $myVar2c=(true or true);
// echo var_dump($myVar2a), "<br>";
// echo var_dump($myVar2b),"<br>";
// echo var_dump($myVar2c),"<br>", "<br>";


// $myVar3a=(true xor false);
// $myVar3b=(true xor true);
// $myVar3c=(false xor false);
// echo var_dump($myVar3a), "<br>";
// echo var_dump($myVar3b), "<br>";
// echo var_dump($myVar3c), "<br>", "<br>";


// define("pi", 33.56 );//constant cant modify
// echo pi, "<br>";


//-------------------------------------------------if else in php----------------
// $first_varible = 22;

// if( $first_varible < 18) {
//     echo "you are kide", "<br>";
// } else if( $first_varible <= 30 ) {
//     echo "you are tinager", "<br>";
// } else if( $first_varible <=50 ) {
//     echo "you are adult", "<br>";
// }

//----------------------------------------------Switch Statment----------------

/*
$age = 56;
switch($age){
    case 12:
        echo"You are 12 years old<br>";
        break;
    case 45:
        echo"You are 12 years old<br>";
        break;
    case 56:
        echo"You are 12 years old<br>";
        break;
    default:
        echo"You are 12 years old<br>";
        break;

}
*/
//-------------------------------------------------loops in php----------------
// $a = array(1,2,3,4,'ironman','Asif',);
//  $b=0;
// while ($b<count($a)) {
// echo $a[$b],'<br>';
// $b++;
// }
// $b=5;
// while ($b>=0) {
// echo $b,'<br>';
// $b--;
// }

// $a=5;
// for ($i= 0; $i<$a; $i++) {
//     echo $i,'<br>';
// }
//------------------DO WHILE LOOP\

// $a=0;

// do{
//     echo $a; // first do 1 time after check condition condition true so work again if false so end 
//     $a++;
// }while($a<=10);


// $a = array(1,2,3,4,'ironman','Asif',);
// foreach($a as $value){
//     echo $value, '<br>';
// }

// --------------------------------------function --------------------------

// function print5(){
//     echo "5";
// }
// print5();

// function print_num( $num ) {
//     echo $num;
// }
// print_num(102);

// // --------------------------------------STRING --------------------------

$str = 'my name is asif ahmad ';
$str1 = ' my father name is naushad ahmad';

//echo strlen($str);                            // for string lenth
// $wordLen = str_word_count($str);            //count words
// $strrev = strrev($str);                    // using for revers
// echo $str . $str1 . $wordLen . $strrev;   // ( . ) for adding two string 
// echo strpos( $str,'asif');               // finding word possition
// echo str_replace('asif', 'Anam', $str); // for replaceing string

// echo strpos( $str,'asif'); // finding word possition
// echo str_replace('asif', 'Anam', $str); // for replaceing string

// if (strcmp($str,$str1)==0){  
// strcamp or strccasecmp both using for compare 2 strin if both are same so return 0 or not same do return 1
//  echo "same";
// }else{
//     echo "not same";
//}


//-------------------------------------------------array in php----------------
// $a = array(1,2,3,4,'ironman','Asif',);
// $b = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>"ironman", "f"=>"Asif",); // set customis index a,b,c
// print_r($a,); echo "<br>"; // for print array becouse array cant print direct using echo
// print_r($b);echo "<br>";
// echo $a[5],'<br>';
// echo count($a); // this function using for finding array lenght



?>


    
</body>
</html>
