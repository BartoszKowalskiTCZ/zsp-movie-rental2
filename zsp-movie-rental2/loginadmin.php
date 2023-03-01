<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="htdocs/zsp-movie-rental2/style.css">
    </head>
    <body>
        <div>
            <?php
                include '../zsp-movie-rental2/header.php';
                include '../zsp-movie-rental2/nav.php';
            ?>
        </div>
        <div class="glowna">
            <div class="l">
                <form method="post">
                    <h3>admin - logowanie</h3>
                    <label>Login: <input type="text" name="login"></label><br>
                    <label style="margin-right: 70px;">Password: <input type="password" name="password"></label><br>
                    <p>
                        <button class="przycisk-zalog" type="submit">Zaloguj</button>
                    </p>
                </form>
                
                <?php
                    if(isset($_POST['login']) && isset($_POST['password']))
                    {
                        $admin = 'SELECT login, password FROM Users WHERE login = "'.$_POST['login'].'" AND password = "'.$_POST['password'].'" AND is_admin = 1';
                        
                        
                        if($result_admin = $db -> query($admin))
                        {
                            if($row_admin = $result_admin -> fetch_array())
                            {
                                echo '<a href="zsp-movie-rental2/index.php" style="border: 0px solid black; border-radius: 0px; padding: 0px; color: white; background-color: #9d0000;">Przejdź do strony</a>'; echo '<h4 color: black>Zalogowano jako admin</h4>';
                                $_SESSION['admin'] = 1;
                                $_SESSION['czy zalogowano'] = 1;
                                $_SESSION['is_admin'] = $row_admin['1'];
                            }
                            else
                            {
                                echo '<h4 color: red>Błędne dane</h4>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <div>
            <?php
                include '../zsp-movie-rental2/footer.php';
            ?>
        </div>
    </body>
</html>
