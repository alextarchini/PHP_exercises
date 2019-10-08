<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    </head>
<body>
    <form action="testForm.php" method="post">
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female <br>
        <label for="name">Surname</label>
        <input type="text" name="name"><br>
        <label for="firstname">Name</label>
        <input type="text" name="firstname"><br>
        <label for="adult">Are you of legal age? </label>
        <input type="checkbox" name="adult" value="yes">yes
        <input type="checkbox" name="adult" value="no">no<br>
        <select name="option" id="">What would you like to eat?
            <option value="1">lunch</option>
            <option value="2">dinner</option>
        </select><br>
        <button type="submit">Send</button>
    </form>
    <p><?= 'Hi '.$_POST['name']. ' ! Your choice of food has been saved. See you soon. :-)'?></p>
</body>
</html>