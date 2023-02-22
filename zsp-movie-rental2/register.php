<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../zsp-movie-rental2/style.css" >
    </head>
    <body>
        <header>
            <?php include '../zsp-movie-rental2/header.php'; ?>
        </header>
        <section>
                                       <div class="log">
            <div class="glowna">
                <form method="post">
                    <h2>Utworz konto</h2>
                    <label>Login: <input type="text" name="login"></label><br>
                    <label>Hasło: <input type="password" name="password"></label><br>
                    <button type="submit">Utworz konto</button>
                    <a href="login.php">Jezeli masz juz konto, zaloguj sie</a>
                </form>
            </div>
                    </div>
                    <?php
                        if(isset($_POST["login"]) && isset($_POST["password"]))
                        {
                            if($_POST["login"] != "" && $_POST["password"] != "")
                            {
                                $sql = 'INSERT INTO Users (login, password, is_admin) VALUES ("'.$_POST["login"].'", "'.$_POST["password"].'"';
                                $db->query($sql);
                                header("location: login.php");
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
        <footer>
            <?php include '../zsp-movie-rental2/footer.php'; ?>
        </footer>
    </body>
</html>
