<?php
    include('db_connect.php')
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/spikEnSpan.ico">
</head>
<body>
    <!-- Navigation bar -->
    <div id="navbar">
        <div id="logo" src="images/spikEnSpan.png" alt="logo"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            <button class="button" onclick="location.href = 'index.php'">Home</button>
            <div style="height: 10px;"></div>
            <button id="limburgs" onclick="location.href = 'index_l.php'">Limburgs</button>
        </div>
        <div id="navbarFill_width"></div>

        <div class="navbarFill"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            <button id="ticket" class="button" onclick="location.href = 'tickets.php'">Tickets bestellen</button>
            <div style="height: 10px;"></div>
            <button id="inlog" class="button" onclick="location.href = 'login.php'">Inloggen</button>
        </div>
        <div class="navbarFill"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            
        </div>
    </div>

    <div style="height: 100px;"></div>

    <?php
    $kindCount = 0;
    $volwassenCount = 0;
    $oudCount = 0;
    foreach($tickets as $test):
        $pray = $test["id"];

        if($test["leeftijd"] < 18){
            $kindCount = $kindCount + 1;
        }
        elseif($test["leeftijd"] < 60){
            $volwassenCount = $volwassenCount + 1;
        }
        else{
            $oudCount = $oudCount + 1;
        }
    endforeach;
        echo "<div id='adminTickets'>";
        echo "<h2>Aantal tickets verkocht: " . $pray . "</h2>";
        echo "</div>";
        echo "<div id='ageCount'>";
        echo "Amount of kid tickets sold: " . $kindCount . "<br>" . "Amount of adult tickets sold: " . $volwassenCount . "<br>" . "Amount of 65+ tickets sold: " . $oudCount;
        echo "</div>";
    ?>

</body>
</html>