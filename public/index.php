<?php  require_once "../getApi.php";  ?>

<?php require_once "../partials/header.php" ;?>

    <?php if($error !== ""):?> 
        <h3><?= $error ?></h3>
    <?php endif?>

    <form action="" method="POST">
        <input type="text" name="country" required>
        <input type="submit" name="submit">
    </form>

    <?php if($country):?>
        <?php require_once "../partials/countryCard.php" ;?>
    <?php endif ;?>

</body>
</html>