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
            <?php
            $movies = 'SELECT movies.name, movies.year, movies.specie_id, movies.user_id, movies.admin_id, movies.lessor_id FROM `movies`JOIN users ON movies.user_id = users.id WHERE users.id';
            
                if($result_movies = $db -> query($movies))
                {
                    if($row_movies = $result_movies -> fetch_array())
                    {
                        echo '<h4>Strona filmu: </h4>';
                        echo '<div class="wyp">';
                            echo '<span style="font-weight: bolder; font-size: 13px">name: </span>'.$_POST['name'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">gatunek: </span>'.$row_movies['specie_id'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">rok wydania: </span>'.$row_movies['year'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Dodany przez: </span>'.$row_movies['id'].'<br><br>';
                            echo '<form method="post">';
                                echo '<button type="submit" class="przyciskklik">Wypożycz film</button>';
                            echo '</form>';
                        echo '</div>';
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