<?
require_once '../engine/methods.php';
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/checkPage.css">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <title>Check</title>
</head>
<body>
<div class="workarea">
<a href="../check/createCheck.php"><h3>Вернуться</h3></a>
<h2>CheckTemplate.json</h2>
<pre>
    {
"rows": [<?
    addLogo();
    addHeader()?>{
        "text": {
            <?bolderOrder();?>

            "columns": [{
                "format": "Заказ: %@",
                "args": [{
                    "meta": "tableOrderIdentifierForClient"
                }]
            }]
        }
    }<? addBonus();
        addAdress();
        addTips();

    ?>
,{
        "type": "fiscal"
    }<?addfooter()?>]
}

    </pre>
</div>
</body>
</html>