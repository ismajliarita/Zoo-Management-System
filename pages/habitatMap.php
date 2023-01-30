<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/png" href="../media/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/413ecd623f.js" crossorigin="anonymous"></script>
    <title>Habitat Map</title>
</head>
<body style="
    background-color: rgb(30, 31, 55);
    background-position: 100% 100%;">
    <nav class="nav">

        <img src="../media/logo.png" id="logo" />

        <div class="nav-items">
            <div class="nav-item"><a href="../index.php">Home</a></div>
            <div class="nav-item"><a href="../pages/habitatMap.php">Habitats</a></div>
            <div class="nav-item"><a href="../pages/animalFacts.php">AnimalFacts</a></div>
            <div class="nav-item"><a href="../pages/ticket.php">Tickets</a></div>
            <div class="nav-item"><a href="../pages/about.php">About</a></div>
            <?php
                if (isset($_COOKIE['logged'])) {
                    $user_fname = $_SESSION['user_fname'];
                    $user_power = $_SESSION['user_power'];
                    
                    switch ($user_power) {
                        case "User":
                            echo "<i class='user-icon user fa-solid fa-user'></i>";
                            break;
                        case "Helper":
                            echo "<i class='user-icon helper fa-solid fa-shield-halved'></i>";
                            break;
                        case "Admin":
                            echo "<i class='user-icon admin fa-solid fa-crown'></i>";
                            break;
                    }

                    echo "<div class='nav-item'><a href='../pages/account.php'>$user_fname</a></div>";
                }
                else
                    echo '<div class="nav-item"><a href="../pages/signup.php">Log In</a></div>';
            ?>
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

    </nav>
    <div class="panelHabitatMap">
        <div class="habitatMap">
            <div class="habitatMap_innerPannel">
                <div class="imgTop">
                    <a href="./animals-user.php?name=&map=ocean&type=">
                        <img src="../media/a-waterAreaNoBckg.png" alt="" class="image" id="waterHabitat">
                    </a>
                    <div class="jungle-map">
                        <a href="./animals-user.php?name=&map=jungle&type=">
                            <img src="../media/a-jungleAreaNoBckg.png" alt="" class="image" id="jungleHabitat">
                        </a>
                    </div>
                    <a href="./animals-user.php?name=&map=arctic&type=">
                        <img src="../media/a-iceAreaNoBckg.png" alt="" class="image" id="iceHabitat">
                    </a>
                </div>
                <div class="imgBot">
                    <a href="./animals-user.php?name=&map=forest&type=">
                        <img src="../media/a-forestNoBkg.png" alt="" class="image" id="forestHabitat">
                    </a>
                    <a href="./animals-user.php?name=&map=desert&type=">
                        <img src="../media/a-desertNoBckg.png" alt="" class="image" id="desertHabitat">
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="../index.js"></script>
</html>