<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
<header>
<h3> Wypożyczalnia Filmów</h3>
</header>
    <div class="glowna">
        <h3>ZALOGUJ SIE LUB ZAREJESTRUJ ABY PRZEGLADAC I WYPOZYCZAC FILMY </h3>
        <button type="button"><a href="login.php">zaloguj</a></button><br><button type="button"><a href="register.php">zarejestruj sie</a></button> </div>
        </body>
</html>
