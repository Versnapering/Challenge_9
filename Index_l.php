<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spik en Span</title>
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
            <button class="button" onclick="location.href = 'index.php'">Nederlands</button>
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

    <div style="display: flex;">
        <div id="spikEnSpan_textFill"></div>
        <div style="display: flex; flex-direction: column;">
            <h1 id="overSpikEnSpan">Over Spik en Span</h1>
            <h2 id="spikEnSpan_text">
                Dit geliefde duo zeen de Kampioene van de Nach en besteit oet Jo Huijnen en Niek Dirckx.
                Same zeen ze eine van de meest succesvolle vastelaovesartiesten in Limburg van ’t lètste decennium.
                Sinds 2010 zeen ze al vaste finaliste van ’t Limburgs Vastelaoves Leedjes Konkoer.
                In 2020 won ’t duo weer ’t LVK mit ’t nummer ‘Vrunj tot de allerbeste run’.
                Sinds ’t begin van hun carrière höbbe ze al ’n speciaal plekske veroverd in ’t hart van hun fans en ze zulle nog lank doorgoan mit ’t oetdele van vreugde en ’n goeie tied, same mit hun muziek.
            </h2>
        </div>
        <div style="display: flex; flex-direction: column;">
            <div style="height: 36px; width: 100px;"></div>
            <img id="spikEnSpan_foto" src="images/SpikEnSpan_artiestenFoto.jpg" alt="Spik en Span"></img>
        </div>
    </div>

    <div style="display: flex;">
        <img id="kasteelLimbricht" src="images/kasteelLimbricht.jpg"></image>
        <div style="display: flex; flex-direction: column">
            <div style="width: 100%; height: 50px;"></div>
            <h2 id="kasteel_text">’t Eersvolgende concert is in: Kasteel Limbricht!</h2>
        </div>
    </div>

        <img id="skeletonGif" src="images\skeleton-running.gif"></img>

    <button id="showImage"></button>

    <script>
        const button = document.getElementById('showImage')
        const image = document.getElementById('skeletonGif')

        button.addEventListener('click', function() {

        if (image.style.display === 'none') {
            image.style.display = 'block';
            button.textContent = 'Oh sheiß, du hat der skaletten frei gelaten!';
        } else {
            image.style.display = 'none';
            button.textContent = ""
        }
    });

    </script>

    <div id="footer">
        <h2 id="inc_text">Jannie en Pieter Vlossingen™ inc.</h2>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spik en Span</title>
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
            <button class="button" onclick="location.href = 'index.php'">Nederlands</button>
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

    <div style="display: flex;">
        <div id="spikEnSpan_textFill"></div>
        <div style="display: flex; flex-direction: column;">
            <h1 id="overSpikEnSpan">Over Spik en Span</h1>
            <h2 id="spikEnSpan_text">
                Dit geliefde duo zeen de Kampioene van de Nach en besteit oet Jo Huijnen en Niek Dirckx.
                Same zeen ze eine van de meest succesvolle vastelaovesartiesten in Limburg van ’t lètste decennium.
                Sinds 2010 zeen ze al vaste finaliste van ’t Limburgs Vastelaoves Leedjes Konkoer.
                In 2020 won ’t duo weer ’t LVK mit ’t nummer ‘Vrunj tot de allerbeste run’.
                Sinds ’t begin van hun carrière höbbe ze al ’n speciaal plekske veroverd in ’t hart van hun fans en ze zulle nog lank doorgoan mit ’t oetdele van vreugde en ’n goeie tied, same mit hun muziek.
            </h2>
        </div>
        <div style="display: flex; flex-direction: column;">
            <div style="height: 36px; width: 100px;"></div>
            <img id="spikEnSpan_foto" src="images/SpikEnSpan_artiestenFoto.jpg" alt="Spik en Span"></img>
        </div>
    </div>

    <div style="display: flex;">
        <img id="kasteelLimbricht" src="images/kasteelLimbricht.jpg"></image>
        <div style="display: flex; flex-direction: column">
            <div style="width: 100%; height: 50px;"></div>
            <h2 id="kasteel_text">’t Eersvolgende concert is in: Kasteel Limbricht!</h2>
        </div>
    </div>

        <img id="skeletonGif" src="images\skeleton-running.gif"></img>

    <button id="showImage"></button>

    <script>
        const button = document.getElementById('showImage')
        const image = document.getElementById('skeletonGif')

        button.addEventListener('click', function() {

        if (image.style.display === 'none') {
            image.style.display = 'block';
            button.textContent = 'Oh sheiß, du hat der skaletten frei gelaten!';
        } else {
            image.style.display = 'none';
            button.textContent = ""
        }
    });

    </script>

    <div id="footer">
        <h2 id="inc_text">Jannie en Pieter Vlossingen™ inc.</h2>
    </div>
</body>
</html>