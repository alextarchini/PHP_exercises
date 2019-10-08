<!-- always set the cookie before any HTML! -->

<!-- //cookie will expire in 1 year
//null, true.. - this prevents JS from mess up (activates httpOnly) -->

<?php
setcookie('pseudo', 'Alex21', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma super page PHP</title>
    </head>
    <body>
    
    <p>
    I remember you! <br/>
    Your name is <?php echo $_COOKIE['pseudo']; ?>
    and you are from  <?php echo $_COOKIE['pays']; ?>
    </p>
    </body>
    </html>