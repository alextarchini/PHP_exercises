<!-- VARS -->

<?php
/* ex1-4 */
$nom='Tarchini';
$prenom='Alex';
$age=33;
$empty;
$empty=0;
$family=array( ' Elvis ' , ' Johnny ' );

echo $empty;
echo 'Hello ' .$prenom. ' child of the family '.$nom. 
' you have reached level '.$age .'! <br/>';
echo $empty;
print_r($family); //shows content of the array

/* ex */
$km=1;
echo $km .'<br/>';
$km=3;
echo $km.'<br/>';
$km=125;
echo $km.'<br/>';

/* ex5 */
$a=3+4;
$b=50*20;
$c=45/5;
echo $a.','. $b .','. $c.'<br/>';

/* ex6 */
$priceStart=785;
$discount=30/100;
echo 'You pay'. $priceStart*$discount. ' euro <br/>'
?>

