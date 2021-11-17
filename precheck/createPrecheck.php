<?php session_start();
$_SESSION['bonus'] = $_POST['bonus'];
$_SESSION['tips'] = $_POST['tips'];
$_SESSION['adress'] = $_POST['adress'];
$_SESSION['header'] = $_POST['header'];
$_SESSION['headerText'] = $_POST['headerText'];
$_SESSION['footer'] = $_POST['footer'];
$_SESSION['footerText'] = $_POST['footerText'];
$_SESSION['bolderOrder'] = $_POST['bolderOrder'];
$_SESSION['logo'] = $_POST['logo'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <title>PrecheckTemplate</title>
</head>
<body>

<div class="main">
    <legend class="name"><p class="name3">PrecheckTemplate</p>
        <a href="../index.php"> <div class="back">
                ↩ Выбрать тип чека
            </div></a></legend>
    <div class="choose">
        <form method="post">
            <p>Добавить логотип (logo.png) <input type="checkbox" class="custom-checkbox" name="logo"></p>
            <p>Увеличить "Заказ" <input type="checkbox" class="custom-checkbox" name="bolderOrder"></p>
            <p>Добавить текст заголовка <input type="checkbox" class="custom-checkbox" name="header"></p>
            <input type="text" class="custom-checkbox" name="headerText">
            <p>Добавить информацию о бонусных баллах <input type="checkbox" class="custom-checkbox" name="bonus"></p>
            <p>Добавить электронные чаевые (tips.png)<input type="checkbox" name="tips"></p>
            <p>Добавить адрес гостя<input type="checkbox" name="adress"></p>
            <p>Добавить текст в подвал <input type="checkbox" class="custom-checkbox" name="footer"></p>
            <input type="text" class="custom-checkbox" name="footerText">
    </div>
    <div class="footer">
        <button class="but" type="submit">Добавить</button>
        <a href="/defaultTemplates/precheck.php"> <div class="but">
                Шаблон
            </div></a>
        </form>
        <a href="/precheck/destroy.php"> <div class="but">
                Очистить шаблон
            </div></a>
    </div>

</div>
</body>