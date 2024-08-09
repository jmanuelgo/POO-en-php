<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("menu.php");
    $menu1=new menu();
    $menu1-> cargar('https://www.google.com','Google');
    $menu1-> cargar('https://www.facebook.com','Facebook');
    $menu1->mostrar();
    ?>
    <br>

    <?php
    include("cards.php");
    $card1=new cards();
    $card1->cargar('img/img1.jpg','Mona china','jajajaj por eso fallaste el press de banca','mejora','jajaja');
    $card1->mostrar();
    ?>
   
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>