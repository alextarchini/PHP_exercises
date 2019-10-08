<?php
/*  it's a quick way to determine 
the value of a variable based on a condition. */
$var1 = 5;
$var_is_greater_than_two = ($var1 > 2 ? true : false); // returns true
echo $var_is_greater_than_two.'<br/>';
//1=true;


//ex2
$gender = 'F';

$bonjour=($gender=='F'? true: false);
echo $bonjour.'Bonjour, you are a woman! <br/>';
//Ternary is only executed if the condition is true

//ex 3  - check if user is logged in
/* $message = 'Hello '.($user->is_logged_in() ? $user->get('first_name') : 'Guest');
$message = 'Hello '.($user->get('first_name') ?: 'Guest'); */
?>