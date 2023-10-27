<?php
require_once("../php/config.php");

if(isset($_POST['submit'])){
    $image = $_FILES["image"]["name"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $releaseDate = $_POST["releaseDate"];
    $blueEssence = $_POST["blueEssence"];

    echo $image . $name . $class . $releaseDate . $blueEssence;

    $sql2 = "INSERT INTO verzamelaar (`image`,`name`, `class`, `releaseDate`, `blueEssence`) VALUES ('$image','$name', '$class', '$releaseDate', '$blueEssence')";
    $result2 = $mysqli->query($sql2);

    $targetDir = "../img/";
    $targetFile = $targetDir . basename($_FILES['image']['name']);


    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
        echo "The file ". basename($_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    header("location:../php/verzameling.php");
}

?>