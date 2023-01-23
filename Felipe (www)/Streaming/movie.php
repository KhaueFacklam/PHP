<?php include 'index.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
</head>

<body>
    <?php
    $movie_id = $_GET['id'];
    $url = "https://api.themoviedb.org/3/movie/$movie_id/videos?api_key=$API_KEY&language=en-US";
    $json = file_get_contents($url);
    $obj = json_decode($json);
    $key = $obj->results[0]->key;
    $name = $obj->results[0]->name;
    $site = $obj->results[0]->site;
    echo "<iframe width='1120' height='630' src='https://www.youtube.com/embed/$key' 
        title='$name' frameborder='0' allow='accelerometer; 
        autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
        web-share' allowfullscreen></iframe>";
    ?>
</body>

</html>