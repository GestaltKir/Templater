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
    <title>Kitchen</title>
</head>
<body>
<div class="workarea">
    <a href="../kitchen/createKitchen.php"><h3>Вернуться</h3></a>
    <h2>KitchenTemplate.json</h2>
    <pre>
    {
    "rows": [<?
        addLogo();
        addHeader();?>{
        "text": {
            "columns": [{
                "hAlignment": "center",
                "format": "%@",
                "args": [{
                    "meta": "cookingPlaceTitle"
                }]
            }]
        }
    }, {
        "text": {
            "columns": [{
                "extendedFormat": {
                    "formatArray": [
                        "Стол: %@",
                        "Зал: %@"
                    ],
                    "margin": {}
                },
                "args": [{
                    "meta": "tableTitle"
                }, {
                    "meta": "floorTitle"
                }]
            }]
        }
    }, {
        "text": {
            <?bolderOrder(); ?>

            "columns": [{
                "format": "Заказ: %@",
                "args": [{
                    "meta": "tableOrderIdentifierForClient"
                }]
            }]
        }
    }, {
        "text": {
            "columns": [{
                "extendedFormat": {
                    "formatArray": [
                        "Гостей: %@",
                        "Сотрудник: %@"
                    ],
                    "margin": {}
                },
                "args": [{
                    "meta": "guestCount"
                }, {
                    "meta": "currentUserName"
                }]
            }]
        }
    }, <?addAdress();?>
        {
        "text": {
            <?bolderTime();?>

            "columns": [{
                "format": "Время: %@ %@",
                "args": [{
                    "meta": "currentDate"
                }, {
                    "meta": "currentTime"
                }]
            }]
        }
    }, {
        "text": {
            "padding": {
                "padString": "-"
            }
        }
    }, {
        "text": {
            "isBold": true,
            "columns": [{
                "multiline": {},
                "format": "%@",
                "args": [{
                    "meta": "cookingPlaceComment"
                }]
            }]
        }
    }, {
        "text": {
            "padding": {
                "padString": "-"
            }
        },
        "condition": {
            "args": [{
                "meta": "cookingPlaceComment"
            }]
        }
    }, {
        "type": "courses"
    }, {
        "text": {
            "padding": {
                "padString": "-"
            }
        }
    }<?addFooter();?>]
}

    </pre>
</div>
</body>
</html>
