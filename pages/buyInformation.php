<?php
if(isset($_GET['name'])){
    $name = urldecode($_GET['name']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Information</title>
    <link rel="stylesheet" href="../style/buyInformation.css">
</head>
<body>
<div class="form">
        <h1>Fill out the your personal information.</h1>
        <form method="post" action="email.php" enctype="multipart/form-data">
            <input type="hidden" value="<?=$name?>" name="name">
            <input type="text" id="userName" name="userName" placeholder="LoL Username" required><br>
            <input type="text" id="fName" name="fName" placeholder="First Name" required><br>
            <input type="text" id="lName" name="lName" placeholder="Last Name" required><br>
            <input type="text" id="city" name="city" placeholder="City" required><br>
            <input type="text" id="adres" name="adres" placeholder="Adres" required><br>
            <input type="email" id="email" name="email" placeholder="E-Mail" required><br>
            <input type="submit" name="submit">
    </div>
    </form>
</body>
</html>