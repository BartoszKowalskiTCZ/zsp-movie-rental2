<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <?php
            include '../zsp-movie-rental2/header.php';
            include '../izsp-movie-rental2/nav.php';
        ?>
        <div class="glowna">
            <h3>Lista Filmów: </h3>
            <input type="hidden">
            <?php
                $movies = 'SELECT movies.name, year.movies FROM `movies` JOIN movies ON movies.specie_id = specie.id;';

                if($result_movies = $db -> query($movies))
                {
                    while($row_movies = $result_movies -> fetch_array())
                    {
                        echo '<div class="l">';
                            echo $row_movies['name'].'<br>';
                            echo 'gatunek': '.$row_movies['species'].'<br>';
                            echo '<form method="post" action="/zsp-movie-rental-2/movie-details.php">';
                                echo '<input type="hidden" name="movies" value="'.$row_movies['name'].'">';
                                ';
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
