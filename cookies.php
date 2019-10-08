<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    echo 'Welcome ' .$_POST['username'] . ' !';
} else {
    echo 'fill in all fields';
}

$cookie_name ="username";
$cookie_value =$_POST['username'];
$cookie_value='Janina'; //set new value of the cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 // 86400 = 1 day

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excuses</title>
</head>

<body>
<section>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
   
<form action="cookies.php" method="post">
            <!-- Username -->
            <label for="username">Username: </label>
            <input type="text" name="username"> <br/>
            <!-- Password-->
            <label for="password">Password: </label> 
            <input type="password" name="password"> <br>
            <!-- send button -->
            <button type="submit">Send</button>
        </form> 

</section>
</body>
</html>