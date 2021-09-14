<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cистема учёта фильмов</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1><b>Cистема учёта фильмов</b></h1>
    <form action="/add.php" method="post">
      <input type="text" name="movie" id="movie" placeholder="Название фильма*" class="form-control"required>
      <input type="text" name="genre" id="genre" placeholder="Жанр*" class="form-control"required>
      <input type="text" name="rating" id="rating" placeholder="Рейтинг*" class="form-control"required>
      <button type="submit" name="send" class="btn btn-success">Добавить фильм</button>
    </form>

    <?php
      require 'configDB.php'; //подключение к БД
      require 'sorting.php'; //Подключение к сортировке списка

      echo '<ul>'; //Вывод списка
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li>
          <a href="/update_movie.php?id='.$row->id.'"><button><i class="far fa-edit"></i> Название</button></a>
          <a href="/update_genre.php?id='.$row->id.'"><button><i class="far fa-edit"></i> Жанр</button></a>
          <a href="/update_rating.php?id='.$row->id.'"><button><i class="far fa-edit"></i> Рейтинг</button></a>
          <a href="/delete.php?id='.$row->id.'"><button><i class="far fa-trash-alt"></i></button></a>
          <b>'.$row->movie.' | '.$row->genre.' | '.$row->rating.' <i class="fas fa-star"></i></b>
        </li>';
      }
      echo '</ul>';
    ?>
  </div>

  <script src="https://kit.fontawesome.com/09882b74b6.js" ></script>
</body>
</html>
