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
</head>
<body>
        <!-- Navigation bar -->
    <div id="navbar">
        <div id="logo" src="images/spikEnSpan.png" alt="logo"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            <button class="button" onclick="location.href = 'index.php'">Home</button>
            <div style="height: 10px;"></div>
            <button class="button" onclick="location.href = 'index_l.php'">Limburgs</button>
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
    foreach($tickets as $test):
        $pray = $test["id"];
    endforeach;
        echo "<div id='adminTickets'>";
        echo "<h2>Aantal tickets verkocht: " . $pray . "</h2>";
        echo "</div>";
    ?>

</body>
</html>