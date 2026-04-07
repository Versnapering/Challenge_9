<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation bar -->
    <div id="navbar">
        <div id="logo" src="images/spikEnSpan.png" alt="logo"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            <button class="button" onclick="location.href = 'index.php'">Home</button>
        </div>
        <div id="navbarFill_width"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            <button id="ticket" class="button" onclick="location.href = 'tickets.php'">Tickets bestellen</button>
        </div>
        <div id="navbarFill"></div>
        <div class="rightSide">
            <div id="navbarFill_height"></div>
            <button id="inlog" class="button" onclick="location.href = 'login.php'">Inloggen</button>
        </div>
    </div>
    
    <div style="height: 100px;"></div>
    
        <div style="display: flex;">
            <div style="width: 40%; height: 100px;"></div>
            <div style="display: flex; flex-direction: column;">
                <h2>Login</h2>

                <form action="process_login.php" method="POST">
                    <label>Username:</label><br>
                    <input type="text" name="username" required><br><br>

                    <label>Password:</label><br>
                    <input type="password" name="password" required><br><br>

                    <button type="submit">Login</button>

                    <?php
                    if (isset($_GET['error'])) {
                        echo "Login failed!";
                    }
                    ?>
                </form>
            </div>
        </div>

</body>
</html>