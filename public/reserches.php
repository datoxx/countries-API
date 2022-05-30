<?php  require_once "../datebase.php"; ?>

<?php require_once "../partials/header.php" ;?>

        <div class="mt-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        <?php foreach ($countries as $country): ?>  
                <a href="country.php?id=<?= $country['id'] ?>">
                    <?php require "../partials/countryCard.php" ;?>
                </a>
        <?php endforeach ?>
        </div>
    </main>
</body>
</html>