<?php
require_once("config.php");

$sql = "SELECT * FROM verzamelaar";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/verzameling.css">
</head>
<body>
<div class="navbar">
        <div class="logo"><img src="../img/LoLlogo.svg"></div>
        <ul>
            <li><a href="../index.html">Home</a></li>
        </ul>
        <ul>
            <li><a href="../pages/admin.html">Admin</a></li>
        </ul>
    </div>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image = $row["image"];
            $name = $row["name"];
            $class = $row["class"];
            $releaseDate = $row["releaseDate"];
            $blueEssence = $row["blueEssence"];
    ?>
            <div  class="magnet">
                <img src="../img/<?= $image ?>" alt="" class="championImg">
                <h2>Champion: <?= $name ?></h2>
                <p>Class: <?= $class ?></p>
                <p>Release Date: <?= $releaseDate ?></p>
                <p>Blue Essence: <?= $blueEssence ?></p>
                <button onclick="buy('<?=$name?>')">Buy</button>
            </div>
    <?php
        }
    }
    ?>
    <script src="../js/verzameling.js"></script>
</body>
</html>
