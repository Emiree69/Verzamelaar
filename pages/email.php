<?php
if(isset($_POST)){
    $name = $_POST['name'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
}
 echo $name;
 echo $userName;

 mail($email, $name, "Beste " . $userName . " Uw bestelling van " . $name . " wordt toegevoegd aan uw account." );

 header("location: ../php/verzameling.php")
?>