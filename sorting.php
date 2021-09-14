<html>
<div class="checkbox_">
    <form method="POST">
        <div class="sort-form">
            <input type="text" name="rating_amount" id="rating_amount" placeholder="Вывести количество элементов" class="form-control">
            <input type="text" name="genre_sort" id="genre_sort" placeholder="Желаемый жанр" class="form-control">
            <input type="text" name="rating_sort" id="rating_sort" placeholder="Рейтинг больше" class="form-control">
        </div>
        
        <input class="custom-radio" type="radio" id="choice_Default" name="sorting" value="sort_Default">
            <label for="choice_Default">По умолчанию</label>
        <input class="custom-radio" type="radio" id="choice_Alphabet" name="sorting" value="sort_Alphabet">
            <label for="choice_Alphabet">По алфавиту</label>
        <input class="custom-radio" type="radio" id="choice_Genre" name="sorting" value="sort_Genre">
            <label for="choice_Genre">По жанрам</label>
        <input class="custom-radio" type="radio" id="choice_Rating" name="sorting" value="sort_Rating">
            <label for="choice_Rating">По рейтингу</label>

        
        <button type="submit" name="send" class="btn btn-success">Применить фильтр</button>
    </form>
</div>
</html>

<?php

$rating_sort = trim($_POST["rating_sort"]); //введенный рейтинг
$rating_amount = trim($_POST["rating_amount"]);
$genre_sort = trim($_POST["genre_sort"]);
$sorting = trim($_POST["sorting"]); //выбранный checkbox

if($rating_amount == '') //если поле пустое - рейтинг максимальный
    $rating_amount = 999999999;

if($rating_sort != '') //если поле не пустое - введенное число (рейтинг больше)
    $sorting = "sort_Rating";

if($genre_sort != '') //если поле не пустое - введенный Жанр
    $sorting = "genre_sort";

if ($sorting == "sort_Default"){
    echo '<div class="sort_text">По умолчанию</div>';
    $query = $pdo->query('SELECT * FROM movies ORDER BY id DESC LIMIT '.$rating_amount.''); //по умолчанию в порядке добавления
}
elseif ($sorting == "sort_Alphabet"){
    echo '<div class="sort_text">По алфавиту</div>';
    $query = $pdo->query('SELECT * FROM movies ORDER BY movie LIMIT '.$rating_amount.''); //по алфавиту
    $checked = true;
}
elseif ($sorting == "sort_Genre"){
    echo '<div class="sort_text">По жанрам</div>';
    $query = $pdo->query('SELECT * FROM movies ORDER BY genre LIMIT '.$rating_amount.''); //по жанрам в порядке алфавита
}
elseif ($sorting == "sort_Rating"){
    if($rating_sort == '') {
        $rating_sort = 0;
        echo '<div class="sort_text">По рейтингу</div>';
        $query = $pdo->query('SELECT * FROM movies ORDER BY rating DESC LIMIT '.$rating_amount.''); //по рейтингу от большего к маньшему
    } else{
        echo '<div class="sort_text">По рейтингу выше: '.$rating_sort.'</div>';
        
        $query = $pdo->query('SELECT * FROM movies WHERE rating>='.$rating_sort.' ORDER BY rating DESC LIMIT '.$rating_amount.''); //по рейтингу больше ...
    }
} elseif ($genre_sort != '') { //если введен желаемый жанр
    if($rating_sort == '')
        $rating_sort = 0;

    $nRows = $pdo->query("SELECT count(*) FROM movies WHERE genre = '$genre_sort' AND rating>=$rating_sort")->fetchColumn(); //количество строк удовлетворяющих значение
    
    echo '<div class="sort_text">Фильмы в жанре '.$genre_sort.' и рейтинком больше '.$rating_sort.' = '.$nRows.'</div>';

    $query = $pdo->query('SELECT * FROM movies WHERE genre = "'.$genre_sort.'" AND rating>='.$rating_sort.' ORDER BY rating DESC LIMIT '.$rating_amount.''); //по введенному жанру и рейтингу
    
} else{ //если ничего не выбрано
    echo '<div class="sort_text">По умолчанию</div>';
    $query = $pdo->query('SELECT * FROM movies ORDER BY id DESC LIMIT '.$rating_amount.''); //по умолчанию в порядке добавления
}

if($rating_amount != 999999999)
    echo '<div class="sort_text">Выведено элементов: '.$rating_amount.'</div>';
?>