<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Sessions</title>
</head>
<body>

<?php
    //Echo session vars from the previous page

echo 'Your age is '.$_SESSION['age']. "<br>";
echo 'Your name is '.$_SESSION['name']. ' '.$_SESSION['surname']. "<br>";
?>
    
</body>
</html>