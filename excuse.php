<?php
if (isset($_POST['title']) &&  isset($_POST['teacher']) &&  isset($_POST['child']) && isset($_POST['excuse'])) {
    echo 'Dear '.$_POST['title'].' '.$_POST['teacher'].', today '.$_POST['child'].' can\'t come because '.$_POST['child'].'\'s ' .$_POST['excuse'];
} else {
    echo 'fill in all fields';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excuses</title>
</head>

<body>
   
<form action="excuse.php" method="post">
            <!-- child name -->
            <label for="child">Child name: </label>
            <input type="text" name="child"> <br/>
            <!-- mr/ms -->
            <label for="title">Mr/Ms</label> <br>
            <input type="radio" name="title" value="Mr ">Mr 
            <input type="radio" name="title" value="Ms ">Ms <br>
            <!-- teacher -->
            <label for="teacher">Teacher name: </label>
            <input type="text" name="teacher"> <br/>
            <!-- excuse -->
            <select name="excuse" id="">
                <option value="sick">sick</option>
                <option value="pet died"> pet died and we can\'t come to school</option>
                <option value="travelling with us today"> travelling with us today</option>
            </select> <br/>
            <!-- send button -->
            <button type="submit">Generate excuse</button>
        </form> 
  

</body>
</html>