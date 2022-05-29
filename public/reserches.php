<?php  require_once "../datebase.php"; ?>

<?php require_once "../partials/header.php" ;?>

    <?php foreach ($countries as $country): ?>   
        <a href="country.php?id=<?= $country['id'] ?>">
             <?php require "../partials/countryCard.php" ;?>
        </a>
    <?php endforeach ?>
    
</body>
</html>