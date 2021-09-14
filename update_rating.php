<html>  

<?php
    require 'configDB.php';
    $id = $_GET['id'];
?>
  
  <div class="container">
    <h1><b>Изменене рейтинга фильма <?php echo $id; ?></b></h1>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <form method="POST">
        <input type="text" name="rating" id="rating" placeholder="Новый рейтинг*" class="form-control"required>
        <a><button type="submit" name="send" class="btn btn-success">Применить изменения</button></a>
    </form>

    <a href="/"><button type="submit" id="btn_back" class="btn btn-success">Вернуться на предыдущую страницу</button></a>
<?php
    $rating = trim($_POST["rating"]);

    $query = "UPDATE `movies` SET `rating` = :rating WHERE `id` = :id";  //заменить рейтинг в выбраном элементе
    $params = [
        ':id' => $id,
        ':rating' => $rating
    ];
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
?>

</html>