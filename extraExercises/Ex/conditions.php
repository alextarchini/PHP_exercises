<!-- conditions -->
<?php
/* ex1 */
$age=18;
if ($age>=18)
{
    echo "you are a major <br/>";
}
else
{
    echo "you are minor <br/>";
}

/* ex2 */
$IsEasy=true;
if ($IsEasy=true)
{
    echo "it's easy <br/>";
}
else
{
    echo "it's hard <br/>";
}

/* ex3 */
$age=33;
$gender='woman';

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

 /* ex4 - RICHTER */
 
/* Switch conditions */
$magnitude=7;

switch ($magnitude)
{
    case 1: 
        echo "Micro-earthquake impossible to feel. <br>";
        break;
    case 2: 
        echo "Micro-earthquake impossible to feel but recordable by
         seismometers. <br>";
        break;
    case 3: 
        echo "Does not cause damage but begins to be slightly felt. <br>";
        break;
    case 4: 
        echo "Earthquake capable of moving objects but not usually 
        causing damage.. <br>";
        break;
    case 5: 
        echo "Earthquake capable of causing major damage to old buildings or buildings with construction defects. 
        Little damage on modern buildings.. <br>";
        break;
    case 6: 
        echo "Strong earthquake capable of causing major destruction
         over a wide distance (180 km) around the epicenter. <br>";
        break;
    case 7: 
        echo "Earthquake capable of major to moderate destruction 
        over a very large area as a function of distance. <br>";
        break;
    case 8: 
        echo "Earthquake capable of major destruction 
        over a very large area of ​​several hundred kilometers. <br>";
        break;
    case 9: 
        echo "Earthquake capable of destroying everything
         in a very large area. <br>";
        break;       
}

/* ex5 */
$maVariable = 'Homme'; 
if ($maVariable != 'Homme')
{
    echo 'C\'est une developpeuse! <br/>';
}
else
{
    echo 'C\'est un developpeur! <br/>';
}

/* ex6 */
$monAge=33; 
if ($monAge >= 18)
{
    echo 'Tu es majeur <br/>';
}
else
{
    echo 'Tu n\'es pas majeur <br/>';
}

/* ex7 */
$maVariable2 = false; 
if ($maVariable2 == false)
{
    echo 'C\'est pas bon! <br/>';
}
else
{
    echo 'C\'est ok! <br/>';
}

/* ex8 */
//checks if the var is declared and not empty or Null
$maVariable3;

if (isset($maVariable3))
{
    echo 'C\'est ok! <br/>';
}
else
{
    echo 'C\'est pas bon! <br/>';
}



?>

