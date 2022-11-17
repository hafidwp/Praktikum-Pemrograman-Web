<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konversi Tipe</title>
</head>
<body>
    <?php
    $a = 300.4;
    echo $a;
    echo"<br>";
    echo "tipe double :", doubleval($a), "<br>";
    echo "tipe integer:", intval ($a), "<br>";
    echo "tipe string:", strval ($a);
    ?>

</body>
</html>