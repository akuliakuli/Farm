<?php
    include "main.php";
    $b = new Farm();
for($i = 1; $i <=10;$i++){
    $s = new Cow();
    $b ->addAnimalsByOne($s);
}
for($i = 1;$i <= 20;$i++){
    $d = new Chicken();
    $b ->addAnimalsByOne($d);
}
$s = new Cow();
$b = new Chicken();
Farm::CountAnimals();
Farm::pickProduct($s);
Farm::pickProduct($b)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <div class ="container">
            <div class ="cows">
                <img src ="img/cow.png">
                <h1 class ="text"><?php  Farm::showCows()?></h1>
                <p class ="product"><?php Farm::showMilkSum()?> </p>
            </div>
            <div class ="chicks">
                <img src = "img/chick.png">
                <h1 class ="text"><?php  Farm::showChick()?></h1>
                <p class ="product"><?php Farm::showEggssum()?></p>
            </div>
        </div>
</body>
</html>>