<?php
  	include "conf/info.php";
 var 	$id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_credits.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
  
?>

    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <h1><?php echo $movie_id->original_title ?></h1>
    <hr>
          <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
          <p>Movie Name : <?php echo $movie_id->original_title ?></p>
          <p>Genres : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </p>
          <p>Movie Description : <?php echo $movie_id->overview ?></p>
          <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
    
    <hr>
    <h3>The cast and crew of the movie</h3>
      <ul>
      <?php
        $count = 4;
        $output=""; 
        foreach($movie_credits->results as $cas){
          $output.='<li><a href="movie.php?id='.$cas->id.'"><img src="http://image.tmdb.org/t/p/w300'.$cas->profile_path.'"><h5>'.$cas->name.'</h5></a></li>';
          if($count <=0){
            break;
            $count--;
          }
        }
        echo $output;
      ?>
      </ul>
 
    <?php 
    } else{
      echo "";
    }
    ?>

