<?php

$age = 14;

if ($age < 12)
{
    echo "salut gamin . ";
}
elseif ($age ==14) 
{
    echo "You are 14 . ";
} else
{
    echo " hi adult. ";
}


/* ex2 */

$adult = true;
$name = "Alex";

if ($adult && $name =="Alex")
{
    echo "This is Alex.";
}
else
{
    echo "This is Rocco.";
}

/* Switch conditions */
$age2 = 18;

switch ($age2)
{
    case 4: 
        echo "You are 4 years. ";
        break;
    case 16:
        echo "you are a child! ";
        break;
    case 18:
        echo "You are an adult. ";
        break;    
        
}

?>

<!-- ex3 -->
<?php
$registered = "not yet";

if ($registered == "yes")
{
    echo "log in";
}
elseif ($registered =="no")
{
    echo "you are not a member";
}
else 
{
    echo "We do not know you!";
}

?>

<!-- ex4 -->

<?php
$member = true;

if ($member) 
{
    echo "welcome back !";
}
else
{
    echo "Pls register! ";
}

?>

<!-- ex5 -->

<?php

$authorised = false;

if (! $authorised)
{
   echo "Oh no, intruder!! ";
}
?>

<!-- ex6 switches compare 1 var in series of many conditions-->

<?php
$note = 4;

switch($note)
{
    case 2:
        echo "You are bad.";
        break;
    case 4:
        echo "you are average.";
        break;
    case 6:
        echo "you are excellent.";
        break;
    
    default:
        echo "Sorry, no message! ";
    
}

?>

<?php
$age3 = 24;

$major = ($age3>=18) ? true: false;
echo $major;

?>

