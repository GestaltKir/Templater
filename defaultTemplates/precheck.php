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
    <title>Precheck</title>
</head>
<body>
<div class="workarea">
    <a href="../precheck/createPrecheck.php"><h3>Вернуться</h3></a>
    <h2>PrecheckTemplate.json</h2>
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
                    "meta": "tablesSchemeTitle"
                }]
            }]
        }
    }, {
        "text": {
            "columns": [{
                <?bolderOrder();?>

                "format": "Заказ: %@",
                "args": [{
                    "meta": "tableOrderIdentifierForClient"
                }]
            }]
        },
        "condition": {
            "type": "nor",
            "args": [{
                "meta": "tableTitle"
            }, {
                "meta": "floorTitle"
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
            "columns": [{
                "extendedFormat": {
                    "formatArray": [
                        "Открыт: %@",
                        "%@"
                    ],
                    "margin": {}
                },
                "args": [{
                    "meta": "openDate"
                }, {
                    "meta": "openTime"
                }]
            }]
        }
    }, {
        "text": {
            "columns": [{
                "format": "Официант: %@",
                "args": [{
                    "meta": "waiterName"
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
            "columns": [{
                "format": "Наименование"
            }, {
                "min": 7,
                "max": 7,
                "beforeMargin": {},
                "hAlignment": "right",
                "format": "Кол-во"
            }, {
                "min": 10,
                "max": 10,
                "beforeMargin": {},
                "hAlignment": "right",
                "format": "Сумма"
            }]
        }
    }, {
        "text": {
            "padding": {
                "padString": "-"
            }
        }
    }, {
        "type": "guests"
    }<?addBonus();
        addAdress();?>, {
        "text": {
            "isBold": true,
            "columns": [{
                "min": 18,
                "max": 18,
                "format": "Сумма без скидок: "
            }, {
                "hAlignment": "right",
                "multiline": {
                    "wrap": "character"
                },
                "format": "%@",
                "args": [{
                    "meta": "nullableSum"
                }]
            }]
        },
        "condition": {
            "args": [{
                "meta": "nullableSum"
            }]
        }
    }, {
        "text": {
            "isBold": true,
            "columns": [{
                "min": 8,
                "max": 8,
                "format": "Скидка: "
            }, {
                "hAlignment": "right",
                "multiline": {
                    "wrap": "character"
                },
                "format": "%@",
                "args": [{
                    "meta": "nullableDiscount"
                }]
            }]
        },
        "condition": {
            "args": [{
                "meta": "nullableDiscount"
            }]
        }
    }, {
        "text": {
            "isBold": true,
            "columns": [{
                "min": 10,
                "max": 10,
                "format": "Надбавка: "
            }, {
                "hAlignment": "right",
                "multiline": {
                    "wrap": "character"
                },
                "format": "%@",
                "args": [{
                    "meta": "nullableCharge"
                }]
            }]
        },
        "condition": {
            "args": [{
                "meta": "nullableCharge"
            }]
        }
    }, {
        "text": {
            "isBold": true,
            "isDoubleHeight": true,
            "isDoubleWidth": true,
            "columns": [{
                "min": 7,
                "max": 7,
                "format": "Итого: "
            }, {
                "hAlignment": "right",
                "multiline": {
                    "wrap": "character"
                },
                "format": "%@",
                "args": [{
                    "meta": "total"
                }]
            }]
        }
    }<? addTips();
        addFooter();?>]
}

    </pre>
</div>
</body>
</html>
