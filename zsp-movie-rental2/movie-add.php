<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="../zsp-movie-rental2/style.css">
    </head>
    <body>
        <div>
            <?php
                include '../zsp-movie-rental2/header.php';
                include '../zsp-movie-rental2/nav.php';
            ?>
        </div>
        <div class="glowna">
            <h4>Dodaj nowy film:</h4>
            <form method="post">
                <label style="margin-left: 20px;">nazwa: <input type="text" maxlength="100"><br></label>
                <label style="margin-left: 20px;">gatunek: <input type="text" maxlength="400"><br></label>
                <label style="margin-right: 33px;">rok: <input type="text" maxlength="80"><br></label>
                <label style="margin-right: 33px;">

                </label><br><br>
                <button class="przyciskklik" type="submit">Dodaj film</button>
            </form>
        </div>
        <div>
            <?php
                include '../zsp-movie-rental2/footer.php';
            ?>
        </div>
    </body>
</html> 