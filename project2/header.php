<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek - все про улюблені фільми!</title>

    <link rel="stylesheet" href="styleLend.css">
    <link rel="stylesheet" href="bootstrap-grid.css">
</head>

<body>

<header class="top">

    <div class="section">

        <div class="Logo"><a href="header.php?page=Lend"><img src="img/unnamed.jpg" width="50" height="50"></a></div>
        <div class="Slogan"><a href="header.php?page=Lend">Geek - все про улюблені фільми</a></div>

    </div>

    <div class="section">

        <div class="Menu_item1"><a href="header.php?page=ConteinerPage">Фільми <br> Marvel/DC</a></div>
        <div class="Menu_item2"><a href="header.php?page=ConteinerPage">Фільми <br> Star Wars</a></div>
        <div class="Menu_item3"><a href="header.php?page=ConteinerPage">Шедеври <br> кіно</a></div>
        <div class="Menu_item4"><a href="header.php?page=ConteinerPage">Шедеври <br> серіалів</a></div>
        <div class="Menu_item5"><a href="header.php?page=ConteinerPage">Наші <br> контакти</a></div>

    </div>


</header>


<?php

    $pages = ['Lend', 'ConteinerPage', 'InfoPage' ];

    $p = isset($_GET['page']) ? $_GET['page'] : 'Lend';
    $page_file = $p.'.php';



    if (file_exists('page/'.$page_file)) {
        require 'page/'.$page_file;
    }

?>

<div class="forVisit">
    <?
        echo "<h3 style='text-align: center'>Ви обновляли сторінки на цьому сайті: ".$counter."разів.<h3>";
    ?>
</div>

<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-sm-3"> Фільми </div>
            <div class="col-sm-3"> Серіали </div>
            <div class="col-sm-3"> Marvel/DC </div>
            <div class="col-sm-3"> Star Wars </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12"> Ми в мережах: <a href="" class="icon"><img src="img/youtube%20(1).png" width="14px" height="14px"></a>
                <a href="" class="icon"><img src="img/instagram%20(2).png" width="14px" height="14px"></a>
                <a href="" class="icon"><img src="img/telegram%20(2).png" width="14px" height="14px"></a>
            </div>
        </div>

    </div>

</div>


</body>

</html>