
<?php
  	include "conf/info.php";
  	$id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_similar.php";
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
          <a align="left" href="cast.php">More movie details</a>
           <form action="fav.php" method="get">
               <div id="share-imdb">
            <!-- IMBD-->
   
            <a href="" target="_blank">
        <img src="image/IMDB.ico" alt="IMDB" width="70" height="70"/>
    </a>
     <input type="image" src="image/fav_icon.png" alt="Submit" width="50" height="50"></form>
          
      
    <hr>
    <h3>Similar Movies</h3>
      <ul>
      <?php
        $count = 4;
        $output=""; 
        foreach($movie_similar_id->results as $sim){
          $output.='<li><a href="movie.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w300'.$sim->backdrop_path.'"><h5>'.$sim->title.'</h5></a></li>';
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

