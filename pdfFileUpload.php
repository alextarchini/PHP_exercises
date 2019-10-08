<?php
if(isset($_FILES['fileToUpload'])){
$target_dir = "../PHP_exercises/pdfUploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$pdffileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getfilesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "file OK" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "this file is not pdf";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "File already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "There is file size limit.";
    $uploadOk = 0;
}
// Allow certain file formats
if($pdffileType != "pdf" ) {
    echo "Only the correct file extensions are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Oups it did not work!";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
        echo "The file". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "Your file is in ". $pdffileType;
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
            
        echo 'Hi '.$_POST['gender'].' '.$_POST['name'].' '.$_POST['lastname'];
    }else{
        echo '<form action="pdfFileUpload.php" method="post" enctype="multipart/form-data">
        <select name="gender" id="">
            <option value="Mr">Mr</option>
            <option value="Ms">Ms</option>
        </select>
        <label for="name">Name : </label>
        <input type="text" name="name" value="">
        <label for="lastname">Surname : </label>
        <input type="text" name="lastname" value="">
        <label for="fileToUpload"> Upload file</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit">Send</button>
    </form>';
    };
    
    ?>
    </section>
</body>
</html>