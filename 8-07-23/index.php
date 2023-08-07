<?php



$firstName = "Naruto"; 
$age = 127;
$height =12.3;
$school =false;
$students = [1,2,3,4];
$class =null;
$subjects = array("ics","bbit","bcom");

/*echo var_dump($firstName);
echo var_dump($age);
echo var_dump($height);
echo var_dump($school);
echo var_dump($students);
echo var_dump($class);
echo var_dump($students);*/

//echo "<br>Hello $firstName <br>";
//echo "You are ".$age." years old";

//function without parameters
function getSum(){
    $num1 =20;
    $num2 =24;
    echo $num1 + $num2;
}
getSum();

//function with parameters
function getProduct($num1,$num2){
    return $num1*$num2;
}
$myProduct= getProduct(10,10);
echo "<h2>Your Product is $myProduct</h2>";// an example to add to html

//conditional statements
if( $age == 18){
    echo "Young man";
}else if($age > 18 && $age < 100){
    echo "You are old";
}else if($age > 100){
    echo "Legend";
}else{
    echo "Grow up";
}


?>