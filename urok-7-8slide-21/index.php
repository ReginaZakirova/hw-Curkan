<?php
$text = [
    "таблица" => "Таблица",
    "имя" => "Георгий Цуркан",
    "приветствие" => "Привет!",
    "инфо" => "Работаю микробиологом в фармацевтической компании. Люблю походы и компьютерные игры.",
    "отзыв" => "Курсы вызывают неподдельный интерес. Замечаний нет.",
    "гласные" => "Количество гласных букв на странице: ",
    "слова" => "Количество слов на странице: ",
    "др" => "Дата рождения: 10.07.1991",
    "сегодня" => "Дата: ",
    "разность" => "Разность: "
];
$now = date('d.m.Y');
$date1 = date_create('1991-07-10');
$date2 = date_create(date('d.m.Y'));
$diff = date_diff($date1, $date2);
$vowels = mb_str_split("АОУЫЭЕЁИЮЯаоуыэеёиюя");
$words_num = 0;
$vowels_num = 0;
foreach($text as $string){
    $words_num += count(explode(" ", $string));

    $string = mb_str_split($string);
    for($i = 0; $i < count($string); $i++){
        if (in_array($string[$i], $vowels)){
            $vowels_num++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles/Style.css">
    <title>Zagolovok</title>
</head>

<body>
    <header class="header">
        <img src="Images/Smile.png">
        <a href="table.html"><?php echo $text["таблица"]?></a>
        <div><?php echo $text["гласные"].$vowels_num?></div>
        <div><?php echo $text["слова"].$words_num?></div>
        <div><?php echo $text["др"]?></div>
        <div><?php echo $text["сегодня"].$now?></div>
        <div><?php echo $text["разность"].$diff -> format('%a дней')?></div>
    </header>
    <main class="block">
        <aside class="photo"><img src="Images/Egorka.jpg"></aside>
        <div class="content">
            <div class="name">
                <h2><?php echo $text["имя"]?></h2>
            </div>
            <div class="info">
                <div class="information"><span style="color: blue;"><?php echo $text["приветствие"]?></span><?php echo $text["инфо"]?>
                </div>
                <div class="comment">
                    <?php 
                    $b = explode(" ", $text["отзыв"]);
                    for ($i = 0; $i < count($b); $i++){
                        if ($i % 2 == 0){
                            echo '<span style="color: blue;">'.$b[$i]." </span>";
                        }
                        else{
                            echo '<span style="color: red;">'.$b[$i]." </span>";
                        }
                    }
                    
                    ?></div>
            </div>
        </div>
    </main>
    <div class="conteiner">
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>

    </div>
    <div class="conteiner wrap">
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>

    </div>
    <div class="conteiner grid">
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>
        <div>
            <img src="Images/eblanik.jpg" alt="">
            <p>Titanic</p>
        </div>

    </div>
</body>

</html>