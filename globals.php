<!-- PHP GLobals -->
<?php
//starts session
session_start();
/* SESSIONS 
A session is a way to store information (in variables) to be used across multiple pages.
Unlike a cookie, the information is not stored on the users computer.
*/

/* SERVER globals */
echo 'user agent: '.$_SERVER['HTTP_USER_AGENT']. '<br>' ; // user agent
echo 'server IP address: '.$_SERVER['SERVER_ADDR'] .'<br>'; //IP address
echo  'server name:  '.$_SERVER['SERVER_NAME'].'<br>'; //server name


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Globals</title>
</head>

    <section>
        <?php
        //Set session vars
        $_SESSION['name']='Alex';
        $_SESSION['surname']='T';
        $_SESSION['age']='33';
        echo 'Session vars are set.';
        

        ?>

    </section>

<body>
    
</body>
</html>