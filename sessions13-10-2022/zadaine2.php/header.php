<header class="header">
<div class="img"><img src="Images/Smile.png"></div>
<div class="menu1">

    <?php if (isset($_COOKIE['user'])) : ?>
        <p>Привет, <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите
            <a href="exit.php">здесь</a>.
        </p>
        <p>Последняя посещённая страница <a href="<?= $_SESSION["page"] ?>"><?= $_SESSION["page"] ?></a></p>
    <?php else : ?>
        <a href="authorization.php">Авторизация</a><br><br>
        <a href="registration.php">Регистрация</a><br><br>
    <?php endif; ?>
    <a href="bitrix.php">Битрикс</a><br><br>
    <a href="fact.php">Факт</a><br><br>
    <form action="" method="POST">
        <select name="color">
            <option style="background-color: rgb(241 68 126)" value="rgb(241 68 126)">Красный</option>
            <option style="background-color: rgb(123 250 185)" value="rgb(123 250 185)">Зелёный</option>
            <option style="background-color: rgb(135 124 255)" value="rgb(135 124 255)">Синий</option>
            <option style="background-color: rgb(183, 214, 173)" value="rgb(183, 214, 173)">Оригинал</option>
        </select>
        <button type="submit">Выбрать цвет</button>
    </form>
</div>
<div class="menu2">
    <a href="table.html"><?php echo $text["таблица"] ?></a>
    <div><?php echo $text["гласные"] . $vowels_num ?></div>
    <div><?php echo $text["слова"] . $words_num ?></div>
    <div><?php echo $text["др"] ?></div>
    <div><?php echo $text["сегодня"] . date('d.m.Y') ?></div>
    <div><?php echo $text["разность"] . diff_date('10.07.1991')->format('%a дней') ?></div>
</div>
</header>