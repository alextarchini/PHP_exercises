<?php

/* strleng = string length */
$phrase = "Hi, my name is Alex" ;
$length = strlen($phrase);  

echo 'The phrase contains ' . $length . ' characters: <br/>' . $phrase. '<br/>';

/* str_replace */
$my_variable = str_replace('b','p', 'bim bam boom');

echo $my_variable . '<br/>';

/* str_shuffle: mix letters */
$chain = 'This is a phrase to mix! ';
$chain = str_shuffle($chain);

echo $chain . '<br/>';

/* strtolower: lowercase */
$chain2 = 'HOW TO WRITE BIG ';
$chain2 = strtolower($chain2);

echo $chain2. '<br/>';

/* get the date */
$year = date('Y');
echo $year . '<br/>';

/* full date and time */
$day = date('d');
$month = date('m');
$year = date("Y"); /* small y - only the 19, if big Y - 2019 for the year */

$hour = date('h');
$minute=date('m');      /*m - minute or month numbers; M - Month in letters */

echo 'Hi! Today is '.$day. '/'.$month .'/'.$year. ' and it is ' .$hour . 'h'.$minute . '<br/>';


/* say hi function */
$name2 = 'Sandra';
echo 'Hi ' . $name2 . '! <br>';

$name2 = 'Patrick';
echo 'Hi ' . $name2 . '! <br>';

/* or with function */
function sayHi($name)
{
    echo 'Hi '. $name . '!<br/>';
}

sayHi('Rocco');
sayHi('Alex');
sayHi('Mimi');

/* calc volume of a cone */
function VolumeCone ($rayon, $hauteur)
{
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
    return $volume; // indique la valeur à renvoyer, ici le volume
 }
 
 $volume = VolumeCone(3, 1);
 echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume. '<br/>';
 ?>
 
<!-- Tips and Tricks -->
<?php
$fichier = fopen ("arrays.php", "r");
?>
<!-- to show the error -->
<?php header ("Content-type: image/png"); ?>

<!--  -->
<?php session_start(); ?>
<html>
<p>Hi</p>
</html>
