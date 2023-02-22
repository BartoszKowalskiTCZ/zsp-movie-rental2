<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div>
            <?php
                include '../includes/header.php';
                include '../includes/nav.php';
            ?>
        </div>
        <div class="glowna_szuk">
            <h4>Dodaj nowy film:</h4>
            <form method="post">
                <label>nazwa: <input type="text" maxlength="45"><br></label>
                <label style="margin-left: 8px;">Opis: <input type="text" maxlength="255"><br></label>
                <label style="margin-right: 13px;">rok: <input type="text" maxlength="45"><br></label>
                <label style="margin-right: 13px;">
                            }
                        ?>
                </label><br><br>
                <button class="przyciskklik" type="submit">Dodaj film</button>
            </form>
        </div>
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html> 