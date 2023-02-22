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
            <div class="logo">
                <h3>log</h3>
                <form method="post">
                    <label>Login: <input type="text" name="login"></label><br>
                    <label style="margin-right: 20px;">Password: <input type="password" name="password"></label><br>
                    <p>
                        <button class="przycisk-zalog" type="submit">Zaloguj</button> 
                        <a href="register.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: yellow;">Utwórz Konto</a>
                    </p>
                </form>
                
                <?php
                    if(isset($_POST['login']) && isset($_POST['password']))
                    {
                        $Users = 'SELECT id, login, password FROM users WHERE id ="'.$_POST['login'].'" AND password="'.$_POST['password'].'"';
                    
                        if($result_Users = $db -> query($Users))
                        {
                            if($row_Users = $result_Users -> fetch_array())
                            {
                                echo '<a href="../index.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Przejdź do strony</a>';
                                echo '<h4 color: black>Zalogowano</h4>';
                                $_SESSION['czy zalogowano'] = 1;
                                $_SESSION['login'] = $row_Users['id'];
                            }
                            else{
                                echo '<h4 color: black>Błędne dane</h4>';
                            }
                        }
                    }
                    else
                    {
                        echo '<h4 style="margin-top: 40px;">';
                            echo 'blednie, podaj dane jeszcze raz <br>';
                        echo '</h4>';
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
