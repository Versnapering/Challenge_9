<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("db_connect.php");

?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['clear_ticket_session'])) {
        unset($_SESSION['new_ticket_id'], $_SESSION['ticket_username'], $_SESSION['ticket_email']);
        exit;
    }

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email");
    $leeftijd = filter_input(INPUT_POST, "leeftijd");

    if($leeftijd < 18){
        $groep = "kind";
    }
    else{
        $groep = "volwassen";
    }

    $sql = "INSERT INTO ticket (username, email, leeftijd, groep)
                    VALUES ('$username', '$email', '$leeftijd', '$groep')";

    try {
        mysqli_query($conn, $sql);
        echo "Your ticket has been entered <br>";
        $newId = mysqli_insert_id($conn);

        $_SESSION['new_ticket_id'] = $newId;
        $_SESSION['ticket_username'] = $username;
        $_SESSION['ticket_email'] = $email;
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
    <link rel="stylesheet" href="style.css">
    <title>Qr code test</title>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init({
                publicKey: "KFZXLRcnoNl6XwhVP",
            });
        })();
    </script>
</head>

<body>

    <div class="maketicket">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id="ticketForm">
            <h2>Ticket bestellen Spik en Span Kasteel Limbricht</h2>
            <label for="username">naam</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="email">email</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="leeftijd">leeftijd</label><br>
            <input type="number" id="leeftijd" name="leeftijd" min="1" max="150" required><br>
            <input type="submit" name="submit" value="Generate_ticket">
        </form>
    </div>

    <script>
        const ticketId = <?= json_encode($_SESSION['new_ticket_id'] ?? null) ?>;
        const ticketName = <?= json_encode($_SESSION['ticket_username'] ?? '') ?>;
        const ticketEmail = <?= json_encode($_SESSION['ticket_email'] ?? '') ?>;

        if (ticketId) {
            const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=` + `localhost/projects/TEST_FILES/qr_code/read.php?id=` + ticketId;

            (async () => {
                try {
                    await emailjs.send("service_jw301zv", "template_hp998z6", {
                        name: ticketName,
                        email: ticketEmail,
                        qr: qrUrl
                    });

                    await fetch("", {
                    method: "POST",
                    body: new URLSearchParams({ clear_ticket_session: "1" })
                });

                    window.alert("Email sent!");
                } catch (err) {
                    window.alert("Email failed:", err);
                }
            })();
        }

        document.getElementById('ticketForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            try {
                const formData = new FormData(this);
                await fetch(this.action, {
                    method: 'POST',
                    body: formData
                });
                window.location.reload();
            } catch (error) {
                console.error("Submit error:", error);
                alert("Er ging iets mis bij het aanmaken van de ticket.");
            }
        });
    </script>

</body>

</html>