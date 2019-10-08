<?php
/* ex1 */
$var1=0;

if (empty ($var1)) {
    echo 'var is either 0, empty or not set at all <br/>' ;
}
else {
    echo 'var is set even though it\'s empty <br/>';
}

/* ex2 */
//reverses the string
echo strrev("Hello world!");

/* ex3 */
//concatenation function (join the members of a array - echo join('', $arr3);)
$arr3 = array('prenom'=>'Alex',  'nom'=>'Tarchini');
print_r($arr3);
echo join('', $arr3). '<br/>';

/* ex4 */
//compare 2 numbers
function compare($num3, $num4) {
    if ($num3>$num4) {
        echo 'Le premier nombre est plus grand <br/>' ;
    }
    elseif ( $num3<$num4){
        echo 'Le premier nombre est plus petit  <br/>';
    }
    elseif ($num3==$num4) {  //IMPT to == when checking if equal!!
        'Les deux nombres sont identiques  <br/>';
    }
}
compare(1,5);

/* ex5 */
//concat
$arr3 = array('number'=>3,  'nom'=>'Rocco');
print_r($arr3);
echo join('', $arr3). '<br/>';

/* ex6 */
//personalised welcome msg
function sayHi($fname, $lname,$age) {
    echo " Hello, $fname  $lname , age $age !<br>";
}
sayHi("Rocco", "Tarchini","33");


/* ex7 */
//categorise with age and gender
function id7($gender, $age) {
    if ($gender=='man' AND $age>=18)
    {
        echo 'You are a man and you are an adult <br>';
     }
    elseif ($gender=='man' AND $age<18)
    {
        echo 'You are a man and you are a minor <br>'; 
    }
    elseif ($gender=='woman' AND $age>=18)
    {
        echo 'You are a woman and you are an adult <br>';
     }
    elseif ($gender=='woman' AND $age<18)
    {
        echo 'You are a man and you are an adult <br>';
     }
}
id7('woman', 33);

/* ex8 */
//function checking if vars are set
//sum 3 numbers

$arr4=array(1, 2, 3);
function CheckEmpty($array) {
    foreach ($array as $value) {
        if (empty($value)) {
            echo '$var is either 0, empty, or not set at all </br>';
        }
        
        // Evaluates as true because $var is set
        if (isset($value)) {
            echo '$var is set even though it is empty </br>';
        }
    }
}
CheckEmpty($arr4) .' <br/>';

echo 'Sum: ' . array_sum($arr4) .' <br/>'; // Sums all elements in an array


/* ex8.2 */
function sum8($num8, $num9, $num10) {
    echo $num8 + $num9 + $num10;
}
sum8(1, 5, 10); 



?>