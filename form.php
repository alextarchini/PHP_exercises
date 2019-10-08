<!-- FORM -->

<?php
if(isset($_FILES)){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "fichier OK" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "ce fichier n'est pas une image";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Fichier existant.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Y a des limites quand même.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Fichier correcte uniquement.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Oups ca n'a pas marché.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        echo "Le fichier". basename( $_FILES["fileToUpload"]["name"]). " a bien été uploadé.";
        echo "votre fichier est en ". $extension;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <?php if(isset($_POST['gender'])){
            
        echo 'salut '.$_POST['gender'].' '.$_POST['name'].' '.$_POST['lastname'];
    }else{
        echo '<form action="form.php" method="post" enctype="multipart/form-data">
            <select name="gender" id="">
            <option value="mr">Mr</option>
            <option value="ms" selected>Ms</option>
            </select>
            <br>
            <label for="name">Name: </label>
            <input type="text" name="name" value="name">
            <br>
            <label for="lastname">Surame: </label>
            <input type="text" name="lastname" value="last name">
            <br>
            <label for="fileToUpload">Upload file</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <button type="submit">Send</button>
            </form>';
        };
    
    ?>
    </section>
</body>
</html>
