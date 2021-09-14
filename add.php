<?php
  $movie = trim($_POST['movie']);
  $genre = trim($_POST['genre']);
  $rating = trim($_POST['rating']);
  
  require 'configDB.php';

  $sql = 'INSERT INTO movies(movie, genre, rating) 
    VALUES(:movie, :genre, :rating)';
  $query = $pdo->prepare($sql);
  $query->execute(['movie' => $movie, 'genre' => $genre, 'rating' => $rating]);

  header('Location: /');
?>


