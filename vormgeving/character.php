<?php 
    require "Connect.php";
    $id = $_GET["id"] - 1 ; 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>


    <?php $contentConnect = getStuffAndConnect("SELECT * FROM characters ");?>

    <header><h1> <?= $contentConnect[$id]['name']?> </h1>

    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>

    </header>

    <div id="container">
        <div class="detail">


            <div class="left">
                <img class="avatar" src="resources/images/<?= $contentConnect[$id]["avatar"] ?>">
                <div class="stats" style="background-color:<?= $contentConnect[$id]["color"] ?>">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $contentConnect[$id]["health"] ?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $contentConnect[$id]["attack"] ?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $contentConnect[$id]["defense"] ?></li>
                    </ul>
                    <ul class="gear">
                        <?php if($contentConnect[$id]["weapon"] == NULL) {?>
                            <li></li>
                            <?php } 

                              else { ?>
                                <li><b>Weapon</b>: <?= $contentConnect[$id]["weapon"] ?></li>
                                <?php } ?>

                        <?php if($contentConnect[$id]["armor"] == NULL) {?>
                        <li></li>
                        <?php } 
                              else { ?>
                              <li><b>Armor</b>: <?= $contentConnect[$id]["armor"] ?></li>
                              <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="right">
                <p>
                <?= $contentConnect[$id]["bio"] ?>
                </p>
            </div>
            <div style="clear: both"></div>

        </div>
    </div>

    <footer>&copy; Mertcan Yildirim 2023</footer>

</body>
</html>