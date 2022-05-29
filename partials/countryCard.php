

<img src="<?=  $country['image'] ?>" alt="image">
<h1> native name: <?= $country['name'] ?></h1>
<h3>capital:  <?= $country['capital']?></h3>
<h3>population:  <?= number_format((float)$country['population'], 0, ' ', ' ') ?></h3>
<?php if($_SERVER['PHP_SELF'] == '/country.php' || $_SERVER['PHP_SELF'] == '/index.php') : ?>
    <h3>region:  <?= $country['region']  ?></h3> 
    <h3>sub region:  <?= $country['sub_region'] ?></h3>
    <h3>currencies:  <?= $country['currencies'] ?></h3>
    <h3>languages:  <?= $country['languages'] ?></h3>
<?php endif ?>

