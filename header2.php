<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MovieGuide</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a href="find.php">Find a Movie</a>
  <a href="fav.php">My Favorite</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
 <h1 > Latest Movies </h1>
 </div>
    <?php
      include_once "api/api_latest.php";
      $min = date('d F Y', strtotime($nowplaying->dates->minimum));
      $max = date('d F Y', strtotime($nowplaying->dates->maximum));
      echo "<h5><sub>from</sub> <span>". $min . "</span>  <sub>until</sub> <span>" . $max . "</span></h5>";
    ?>
    <hr>
    <ul>
      <?php
        foreach($nowplaying->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . "</em></h5></a></li>";
        }
      ?>
    </ul>
</div>