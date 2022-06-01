<?php  require_once "../getApi.php";  ?>

<?php require_once "../partials/header.php" ;?>


        <?php if($error !== ""):?> 
            <h3><?= $error ?></h3>
        <?php endif?>

        <form  class="flex justify-center" action="" method="POST">
            <input class="border-2 border-gray-300 mr-4" type="text" name="country" required>
            <input class="rounded-full py-2 px-3 hover:text-gray-700 hover:bg-white uppercase border-gray border-2 cursor-pointer tracking-wider" type="submit" name="submit">
        </form>

        <?php if($country):?>
            <?php require_once "../partials/countryCard.php" ;?>
        <?php endif ;?>
     </main>
</body>
</html>