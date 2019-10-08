<?php
//we start the session before the HTML
session_start();

//we create vars in $_SESSION
$_SESSION['prenom']='Alex';
$_SESSION['nom']='Tarchini';
$_SESSION['age']='33';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>My Page's title</title>
    </head>
    <body>
    <p>
        Hi <?php echo $_SESSION['prenom']; ?> !<br />
        You are on my landing page(index.php). Do you want to go to another page?
    </p>
    
    <p>
        <a href="mapage.php">Lien vers mapage.php</a><br />
        <a href="monscript.php">Lien vers monscript.php</a><br />
        <a href="informations.php">Lien vers informations.php</a>
    </p>
    </body>
</html>

