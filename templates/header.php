<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Социальная сеть</title>
    <link rel="stylesheet" href="../static/style.css">
</head>
<body>
<header>
    <div class="header__wrapper">
        <nav>
            <ul class="nav__list">
                <li><a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/profile.php">Профиль</a></li>
                <li><a href="messages.php">Сообщения</a></li>
                <li><a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/friends">Друзья</a></li>
                <li><a href="home.php">Лента</a></li>
                <li><a href="likes.php">Мои лайки</a></li>
                <li><a href="config.php">Настройки</a></li>
                <li><a href="exit.php">Выйти</a></li>
            </ul>
        </nav>
    </div>
</header>