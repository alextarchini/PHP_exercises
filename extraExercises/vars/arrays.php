<!-- PHP ARRAYS -->

<?php
$names = array ("Rocco", "Alex", "Illy", "Mimi");
$names[]='mom';
$names[]='dad';
echo 'Bojour ' . $names[4];
?>

<!-- ex2 Associative Arrays (for sub-elements) -->
<?php
$coordinates = array (
    'name' => 'Alex',
    'surname' => 'Tarchini',
    'address' => 'Willems 14',
    'city' => 'Razlog' );

echo $coordinates['city'];
?>

<!-- browsing arrays -->
<!-- ex3 - arrays with loop FOR -->
<?php
$prenoms = array ('Leah', 'Eliabeth', 'Mimi', 'Temi', 'Emo');
for ($number=0; $number<5; $number++) 
{
    echo '<br/>'. $prenoms[$number];
}
?>

<!-- foreach loop: Browsing associative arrays -->
<?php
$names2= array('Kate', 'Dorien', 'Villy', "Temi");
foreach($names2 as $element)
{
    echo '<br/>'. $element;
}
?>

<?php
$coordinates = array (
    'name'=>'Alex',
    'surname'=>'Tarchini',
    'address'=>'Vihren 17',
    'town'=>'Razlog', );

foreach($coordinates as $element)
{
    echo '<br/>' . $element;
}
?>

<?php
$coordinates = array (
    'name'=>'Alex',
    'surname'=>'Tarchini',
    'address'=>'Vihren 17',
    'town'=>'Razlog', );

foreach($coordinates as $key => $element)
{
    echo '<br/>' . '['. $key.'] is ' .$element;
}
?>

<!-- Quickly display content of array: print_r -->
<?php

echo '<pre>';  /* this is like <br/> */
print_r($coordinates);
echo '<pre>';

?>

<!-- Search in an array -->
<!-- array_key_exists -->
<?php

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'The key "name" is in the coordinates! ';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'The key "pays" is in the coordinates! ';
}
 ?>

 <!-- Check if value exists: in_array -->
 <?php
$fruits = array ('banana', 'apple', 'paid', 'berries');

if (in_array('myrtle', $fruits))
{
    echo 'The value "myrtle" is in! ';
}

if (in_array('berries', $fruits))
{
    echo 'The value "berries" is in! ';
}

 ?>

 <!-- Get the of a value in array: array_search -->
 <?php
$fruits = array ('banana', 'apple', 'paid', 'berries');

$position = array_search('berries', $fruits);
echo '"Berries" are in position ' .$position . '<br/>';

$position = array_search('banana', $fruits);
echo '"banana" is in position' . $position;

 ?>