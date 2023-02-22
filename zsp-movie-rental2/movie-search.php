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
            <h4>Wyszukaj film: </h4>
            <form method="post" action="/zsp-movie-rental2/movie-details.php">
                <input type="text" name="movies">
                <button type="submit" class="button-tworzenie">Wyszukaj</button>
            </form>
            <div class="glowna">
            <?php
                $movies = 'SELECT movies.name, movies.year, movies.specie_id, movies.user_id, movies.admin_id, movies.lessor_id FROM `movies`JOIN users ON movies.user_id = users.id WHERE users.id';
                if($result_movies = $db -> query($movies))
                {
                    while($row_movies = $result_movies -> fetch_array())

                            {
                                echo '<span style="font-weight: bolder; font-size: 13px">nazwa: </span>'.$row_movies['name']. '<br>';
                                echo '<span style="font-weight: bolder; font-size: 13px">gatunek: </span>'.$row_movies['specie_id']. '<br><br>';
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