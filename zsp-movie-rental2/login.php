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
                <h3> L O G O W A N I E:</h3>
                <form method="post">
                    <label>LOGIN: <input type="text" name="login"></label><br>
                    <label style="margin-right: 20px;">PASSWORD: <input type="password" name="password"></label><br>
                    <p>
                        <button class="przycisk-zalog" type="submit">Zaloguj</button> 
                        <a href="register.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: red;">Utwórz Konto</a>
                    </p>
                </form>
                
                <?php
                    if(isset($_POST['login']) && isset($_POST['password']))
                    {
                        $Users = 'SELECT id, login, password FROM users WHERE login ="'.$_POST['login'].'" AND password="'.$_POST['password'].'"';
                    
                        if($result_users = $db -> query($Users))
                        {
                            if($row_users = $result_users -> fetch_array())
                            {
                                echo '<a href="zsp-movie-rental2//index.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Przejdź do strony</a>';
                                echo '<h4 color: black>Zalogowano</h4>';
                                $_SESSION['czy zalogowano'] = 1;
                                $_SESSION['login'] = $row_users['login'];
                            }
                            else{
                                echo '<h4 color: black>Błędne dane</h4>';
                            }
                        }
                    }
                ?>
            </div>
        <div>
            <?php
                include '../zsp-movie-rental2/footer.php';
            ?>
        </div>
    </body>
</html> 
