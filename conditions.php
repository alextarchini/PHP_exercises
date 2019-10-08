<?php
$current_time=date('H:i');
$int =(int) $current_time;
//translate $_GET vars into normal vars
$age=$_GET['age'];
$gender=$_GET['gender'];
$lang=$_GET['lang'];

//TIME condition
if ($current_time >='05' and $int<='09') {
    echo '<p> Bonjour  </p>';
}else if ($int >'09' and $int <='12'){
    echo '<p> Bon journee! </p>';
}else if ($current_time >'12' and $int <='16') {
    echo '<p> Bon apres-midi! </p>';
}else if ($int >'16' and $int <='21') {
    echo '<p> Bon soiree! </p>';
}else if ($int> '21' and $int <'05') {
    echo '<p> Bonne nuit!! </p>';
};

//AGE condition
if ($age <12) {
    echo '<p> Hi kiddo! </p>';
} else if ($age > 12 and $age <18) {
    echo '<p> Hi teen! </p>';
} else if ($age > 115) {
    echo '<p> Long life!! </p>';
};

//gender condition
if ($gender == 'F'){

	// Ici, du code à exécuter si le genre est "femme"

	if ( $age <= 12 and $lang == "FR" ) {
		// Ici, du code à exécuter si le genre est "femme",  que l'âge est inférieur à 13 et que la langue est "français"
		echo '<p>Hello FR teen girl </p>';
	} else{
		// Ici, du code à exécuter si le genre est "femme",  et que l'âge est supérieur à 13 ou que la langue n'est pas "français"
		echo '<p>Hello FR woman </p>';
	}

} else {
	// Ici, du code à exécuter si le genre n'est pas "femme"

	if ( $age <= 12 and $lang == "FR" ) {
		// Ici, du code à exécuter si le genre n'est pas "femme", que l'âge est inférieur à 13 et que la langue est "français"
		echo '<p>Hello FR teen </p>';
	} else {
        echo '<p>Hello FR man </p>';
    }
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>The current time is: <?php  echo $current_time ?></h1>

    <form action="conditions.php" method="get">
        <!-- age -->
        <label for="age">What is your age?</label>
        <input type="number" name="age" valuye=""> <br>
        <!-- gender -->
        <label for="gender">Gender</label> <br>
            <input type="radio" name="gender" value='F'>F 
            <input type="radio" name="gender" value='M'>M<br>
        <!-- language -->
        <select name="lang">Language
            <option value="1">FR</option>
            <option value="2">EN</option>
            <option value="3">BG</option>
        </select>
        <button type="submit"> Send</button>
    </form>

</body>
</html>