<?php
session_start(); // we start the Session before anything else
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Info</title>
    </head>
    <body>
    <p>Re-bonjour !</p>
    <p>
        I remember you! Your name is <?php echo $_SESSION['prenom']. ' '.$_SESSION['nom']; ?> ! <br/>
        And your age hmmm... You are <?php echo $_SESSION['age'] ?> years old, aren't you?
    </p>
    </body>
</html>