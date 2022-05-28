<?php 
     require "getApi.php"; 
     require "connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3><?= $error ?></h3>

    <form action="" method="POST">
        <input type="text" name="country" required>
        <input type="submit" name="submit">
    </form>


    <?php foreach ($countries as $country): ?>

        <img src="<?=  $country['image'] ?>" alt="image">
        <h1> native name: <?= $country['name'] ?></h1>
        <h3>capital:  <?= $country['capital']?></h3>
        <h3>population:  <?= number_format((float)$country['population'], 0, ' ', ' ') ?></h3>
        <h3>region:  <?= $country['region']  ?></h3> 
        <h3>sub region:  <?= $country['sub_region'] ?></h3>
        <h3>currencies:  <?= $country['currencies'] ?></h3>
        <h3>languages:  <?= $country['languages'] ?></h3>

    <?php endforeach ?>

    <pre>
        <?php print_r($countries) ?>
    </pre>

</body>
</html>