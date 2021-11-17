<?
function addBonus()
{
    if ($_SESSION['bonus'] == "on") {
        echo ",{
        \"text\": {
            \"columns\": [{
                \"extendedFormat\": {
                    \"formatArray\": [
                        \"%@\",
                        \"%@\",
                        \"%@\"
                    ],
                    \"margin\": {}
                },
                \"args\": [{
                    \"meta\": \"customerLastName\"
                }, {
                    \"meta\": \"customerFirstName\"
                }, {
                    \"meta\": \"customerMiddleName\"
                }]
            }]
        },
        \"condition\": {
            \"args\": [{
                \"meta\": \"deliveryAddress\"
            }]
        }
    }";
    }
}

function addAdress()
{
    if ($_SESSION['adress'] == "on") {
        echo ",{
        \"text\": {
            \"columns\": [{
                \"format\": \"Адрес: %@\",
                \"args\": [{
                    \"meta\": \"deliveryAddress\"
                }]
            }]
        },
        \"condition\": {
            \"args\": [{
                \"meta\": \"deliveryAddress\"
            }]
        }
    }";
    }
}

function addTips()
{
    if ($_SESSION['tips'] == "on") {
        echo ",{
        \"text\": {
            \"isBold\": true,
            \"isDoubleHeight\": true,
            \"isDoubleWidth\": true,
            \"columns\": [{
                \"hAlignment\": \"center\",
                \"format\": \"Безналичные чаевые\",
                \"multiline\": {}
            }]
        }
    },{
        \"text\": { 
            \"columns\": [{
                \"hAlignment\": \"center\",
                \"format\": \"Отсканируйте QR-код, чтобы оставить чаевые\",
                \"multiline\": {}
            }]
        }
    },{
        \"type\": \"image\",
        \"image\": {
            \"imageName\": \"tips.png\",
            \"horizontalOffset\": 100
        }
    } ";
    }
}

function addHeader()
{
    if ($_SESSION['header'] == "on") {
        echo "{
        \"text\": {
            \"isBold\": true,
            \"isDoubleHeight\": true,
            \"columns\": [{
                \"hAlignment\": \"center\",
                \"format\": \"{$_SESSION["headerText"]}\",
                \"multiline\": {}
            }]
        }
    },";
    }
}
function addFooter()
{
    if($_SESSION['footer'] == "on"){
        echo ",{
        \"text\": {
            \"isBold\": true,
            \"isDoubleHeight\": true,
            \"columns\": [{
                \"hAlignment\": \"center\",
                \"format\": \"{$_SESSION["footerText"]}\",
                \"multiline\": {}
            }]
        }
    }";
    }
}
function bolderOrder(){
    if($_SESSION['bolderOrder'] == "on"){
        echo
        "\"isBold\": true,
                \"isDoubleHeight\": true,";
    }
}
function addLogo(){
    if($_SESSION['logo'] == "on"){
        echo "{
            \"type\": \"image\",
        \"image\": {
            \"imageName\": \"logo.png\",
            \"horizontalOffset\": 100
        }
    }, ";
    }
}
function bolderTime(){
    if($_SESSION['bolderTime'] == "on"){
        echo
        "\"isBold\": true,
                \"isDoubleHeight\": true,";
    }
}
?>