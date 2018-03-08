<center><br><h3><img src="image/movie_banner.jpg" width="1400" height="300"></h3>
<? echo file_get_contents('style.css');?>
<!DOCTYPE html>
<html lang="en">
    <title>MovieGuide</title>
  <body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a href="find.php">Find a Movie</a>
  <a href="fav.php">My Favorite</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
 <h1 > Find your Movies </h1>
  <body>
   <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Type Title Here" required  style="width: 200px; height: 40px" ">
      <input type="image" src="image/searchicon.png" alt="Submit" width="50" height="50">
    </form>
    <ul>
</div>
