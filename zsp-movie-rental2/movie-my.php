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
                include '../zsp-movie-rental2/header.php';
                include '../zsp-movie-rental2/nav.php';
            ?>
        </div>
        <div class="glowna">
            <h4>Twoje filmy:</h4> 
            <?php
            $movies = 'SELECT movies.name, movies.year, movies.specie_id, movies.user_id, movies.admin_id, movies.lessor_id FROM `movies`JOIN users ON movies.user_id = users.id WHERE users.id = "'.$_SESSION['admin'].'";';
                if($result_movies = $db -> query($movies))
                {
                    while($row_movies = $result_movies -> fetch_array())
                    {
                        if($row_movies['login'] = $_SESSION['admin'])
                        {
                            echo '<span style="font-weight: bolder; font-size: 13px">Tytuł: </span>'.$row_movies['name'].'<br><br>';
                        }
                    }
                }
            ?>
            <form method="post" action="/zsp-movie-rental2/movie-add.php">
                <button  class="przyciskklik" type="submit">Dodaj film</button>
            </form>
        </div>
        <div>
            <?php
                include '../zsp-movie-rental2/footer.php';
            ?>
        </div>
    </body>
</html>