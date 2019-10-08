<?php
//months

$arr1=array(
    'January', 
   'February',
    'March' , 
    'April' , 
    'May' , 
    "June" , 
    "July" , 
    "August" , 
    "September" , 
    "October ", 
     "November" , 
    "December"
);
print_r($arr1);

//ex2
echo $arr1[2]. '</br>';
echo $arr1[5]. '</br>';
echo $arr1[9]='Avgust' . '<br/>';

//ex3
//array printing elements and codes - Use FOREACH 
$reg=array(
    (01) => "Ain" ,
    (03) => "Allier"  ,
    (07) =>"Ardèche",
    (15)  => "Cantal" , 
    (26) => "Drôme" ,
    (38) => "Isère"  ,
    (42) => "Loire" , 
    (43) => "Haute-Loire" ,
    (63) => "Puy-de-Dôme",
    (69) => "Rhône" ,
    (73) => "Savoie" ,
    (74)  => "Haute-Savoie"  
);

print_r($reg) .'<br/>';
/* foreach ($regs as $key = $value) {
    echo  $key ." is at ". $value. '<br/>';
} */
echo $reg[63]. '<br/>';

//add an element to an array but NOT FOR ASSOCIATIVE ARRAYS
/* array_push ($reg, 'Metx');
print_r($reg); */

$reg[100]='Metz';
print_r($reg); 

foreach ($reg as $key => $value) {
    echo "Le département ". $value. " a le numéro"  . $key. '</br>';
} 


//function is not really needed here
/* function show($array) {
    foreach ($array as $key => $value) {
       echo "Le département ". $value. "a le numéro"  . $key;
    }
}
show($reg); */

/* ex4 */
//send personalised message
$friend=array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
$msg=' Devine quoi ! Je me marie dans samedi dans deux semaines !
 J\'espère te compter parmi les invités ! Gros bisous :)';


    foreach ($friend as $value) {
       echo "Salut, ". $value. " !". $msg. '</br>';
    }

?>
