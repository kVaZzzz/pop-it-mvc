<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/style/style.css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav class="header">
        <a class="link" href="<?= app()->route->getUrl('/find_patient') ?>">Пациенты</a>
        <a class="link" href="<?= app()->route->getUrl('/find_doctor') ?>">Врачи</a>
        <a class="link" href="<?= app()->route->getUrl('/record') ?>">Записать</a>
        <a class="link" href="<?= app()->route->getUrl('/cancel_record') ?>">Отменить запись</a>
        <a class="link" href="<?= app()->route->getUrl('/add') ?>">Добавление</a>
        <a class="link" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
