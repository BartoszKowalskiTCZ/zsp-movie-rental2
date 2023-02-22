<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="nav">
            <?php
                if (!isset($_SESSION['czy zalogowano']))
                {
                    echo'<h5>';
                    echo'| <a href=/zsp-movie-rental2/>str glowna</a> | ';
                    echo'<a href="/zsp-movie-rental2/login.php">logowanie txt</a> | ';
                    echo'<a href="/zsp-movie-rental2/login.php">dla admina</a> |';
                    echo'</h5>';    
                }
                else if(isset($_SESSION['admin']))
                {
                    echo'<h5>';
                    echo'| <a href=/zsp-movie-rental2/>Strona Główna</a> | ';
                    echo'<a href="/zsp-movie-rental2/movie-list.php">Lista Filmów</a> | ';
                    echo'<span>Zalogowany Jako Administrator ['.$_SESSION['l_admin'].'] - </span>';
                    echo'<a href="/zsp-movie-rental2/logout.php">Wyloguj |</a>';
                    echo'</h5>';    
                }
                else
                {
                    echo'<h5>';
                    echo'| <a href=/zsp-movie-rental2/>Strona Główna</a> | ';
                    echo'<a href=/zsp-movie-rental2/movie-search.php>Wyszukaj Film</a> | ';
                    echo'<a href=/zsp-movie-rental2/movie-my.php>Moje Filmy</a> | ';
                    echo'<span>Zalogowany Jako ['.$_SESSION['login'].'] - </span>';
                    echo'<a href="/zsp-movie-rental2/logout.php">Wyloguj</a> |';
                    echo'</h5>'; 
                }
            ?>
        </div>
    </body>
</html>