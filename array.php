<?php

$country=['BE', 'BG', "UK", "IT"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array of countries to choose</title>
</head>

<body>
    <select name="" id="">
        <?php
            foreach ($country as $index => $value) {
                echo "<option> $value</option>" ;
            }
        ?>
    </select>
</body>

</html>