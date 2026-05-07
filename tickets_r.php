<?php
    include("db_connect.php");
?>

<?php

    $currentId = $_POST['id'] ?? $_GET['id'] ?? null;

    echo $currentId . '<br>';

    $entry = "De ticket is niet geldig<br>";
    $korting = "";
    $delcon = "";
    $delid = "DELETE FROM ticket WHERE id = $currentId";
    $kindcount = 0;
    $volwassencount = 0;

    foreach ($tickets as $check):
        if($check['id'] == $currentId){
            $entry = "De ticket is geldig. ";
            $username = $check['username'];
            $leeftijd = $check['leeftijd'];

            if($check['leeftijd'] < 18){
                $korting = "U komt tot aanmerking met kinderkorting.";
            }

        }

        if($check['ticketsoort'] == "kind"){
            $kindcount = $kindcount + 1;
        }
        elseif($check['ticketsoort'] == "volwassen"){
            $volwassencount = $volwassencount + 1;
        }
    
    endforeach;

    if($entry == "De ticket is geldig. "){
        echo $entry . "de naam van de besteller is " . $username . ", de eigenaar van de ticket is " . $leeftijd . " jaar oud.<br>";
    }
    else{
        echo $entry;
    }

    if($korting != ""){
        echo $korting . "<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        try{
            mysqli_query($conn, $delid);
            echo "<h3>De ticket is verwijderd</h3>";
        } catch (mysqli_sql_exception) {
        echo "An error has occured <br>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id="ticketForm">
        <input type="hidden" name="id" value="<?= htmlspecialchars($currentId) ?>">
        <input type="submit" name="submit" value="Delete_Ticket">
    </form>

    <?php echo "er is een totaal van " . $kindcount . " kinderen en " . $volwassencount . " volwassenen."?>
</body>
</html>