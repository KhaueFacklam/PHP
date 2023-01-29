<?php 
if (!isset($_SESSION)) {
    session_start();
}
$API_KEY = '80238028c00880cee358041a14665840';
include('verifyLogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
</head>

<body>

    <?php
    echo "<header>
        <form method='get'>
            <input type='text' name='search' placeholder='Pesquisar' class='inputText' id='pesquisar'>
            <input type='submit' name='submit' value='Pesquisar' class='inputSubmit'>
        </form>
            <a href='login.php'><p id='logout'>Logout</p></a>
        </header>";

    if (!empty($_GET['search'])) {
        $pesquisa = $_GET['search'];
        $url = "https://api.themoviedb.org/3/search/movie?query=$pesquisa&api_key=$API_KEY&language=en-US&page=1&include_adult=false";
        $json = file_get_contents($url);
        $obj = json_decode($json);

        echo "<p>Resultados para $pesquisa";
        echo "<div class='moviesContainer'>";
        foreach ($obj->results as $result) {
            $poster_path = $result->poster_path;
            $img_poster = 'https://image.tmdb.org/t/p/w500' . $poster_path;
            echo "<div class='movieContainer'> <a href='movie.php?id=$result->id'>";
            echo "<img src='$img_poster'class='imgMovie'>";
            echo "<div><div class='title'>$result->title</div></div>";
            echo "</a></div>";
        }
        echo "</div>";
    }

    ?>

</body>

</html>