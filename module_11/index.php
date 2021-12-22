<?php

var_dump($_POST);
if(! empty($_POST)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/module_11/data/users.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/module_11/data/passwords.php';

    $success = false;
    $error = false;

    if((in_array($_POST['login'], $users)) && (in_array($_POST['password'], $passwords)) && ($users['id'] === $passwords['id'])) {
        $success = true;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
</head>

<body>

<div class="header">
    <div class="logo"><img src="i/logo.png" alt="Project"></div>
    <div class="author">Автор: <span class="author__name">***</span></div>
</div>

<div class="clear">
    <ul class="main-menu">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Каталог</a></li>
    </ul>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="left-collum-index">

            <h1>Возможности проекта —</h1>
            <p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с
                друзьями и просматривать списки друзей.</p>


        </td>
        <td class="right-collum-index">

            <div class="project-folders-menu">
                <ul class="project-folders-v">
                    <li class="project-folders-v-active"><a href="/module_11/?login=yes">Авторизация</a></li>
                    <li><a href="#">Регистрация</a></li>
                    <li><a href="#">Забыли пароль?</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="index-auth">
                <?php if ($_GET['login'] == 'yes' || $error) { ?>
                    <form action="index.php" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="iat">
                                    <label for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" size="30" name="login" value="<?=$error ? htmlspecialchars($_POST['login']) : '' ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?=$error ? htmlspecialchars($_POST['password']) : '';?>">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Войти"></td>
                            </tr>
                        </table>
                    </form>
                <?php }

                   if ($success) {
                       include $_SERVER['DOCUMENT_ROOT'] . '/module_11/include/success_message.php';
                   } elseif ($error) {
                       include $_SERVER['DOCUMENT_ROOT'] . '/module_11/include/error_message.php';
                   }
                 ?>
            </div>


        </td>
    </tr>
</table>

<div class="clearfix">
    <ul class="main-menu bottom">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Каталог</a></li>
    </ul>
</div>

<div class="footer">&copy;&nbsp;<nobr>2018</nobr>
    Project.
</div>

</body>
</html>