<?php  require "getApi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="country" required>
        <input type="submit" name="submit">
    </form>


    <img src="<?= $image ?>" alt="image">
    <h1> native name: <?= $name ?></h1>
    <h3>capital:  <?= $capital ?></h3>
    <h3>population:  <?=  $population  ?></h3>
    <h3>region:  <?= $region   ?></h3>
    <h3>sub region:  <?= $sub_region  ?></h3>
    <h3>currencies:  <?= $currencies  ?></h3>
    <h3>languages:  <?= $languages ?></h3>
    

</body>
</html>