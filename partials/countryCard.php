<?php if($_SERVER['PHP_SELF'] == '/country.php' || $_SERVER['PHP_SELF'] == '/index.php') : ?>
    <div class="grid sm:grid-cols-4 sm:items-center  bg-white rounded overflow-hidden shadow-md mt-8">
        <img class=" w-full  h-30 sm:col-span-2  object-cover" src="<?=  $country['image'] ?>" alt="image">
        <div class="m-4 md:ml-10">
            <span class="font-bold block text-gray-500 text-xl mb-2"> <?= $country['name'] ?></span>
            <span class="font-bold block text-gray-500">capital:  <?= $country['capital']?></span>
            <span class="font-bold block text-gray-500">population:  <?= number_format((float)$country['population'], 0, ' ', ' ') ?></span> 
            <span class="font-bold block text-gray-500">region:  <?= $country['region']  ?></span> 
        </div>
        <div class="m-4 md:mt-14">
            <span class="font-bold block text-gray-500">sub region:  <?= $country['sub_region'] ?></span>
            <span class="font-bold block text-gray-500">currencies:  <?= $country['currencies'] ?></span>
            <span class="font-bold block text-gray-500">languages:  <?= $country['languages'] ?></span>
        </div>
    </div>
<?php endif ?>

<?php if($_SERVER['PHP_SELF'] == '/reserches.php') : ?>
    <div class="bg-white rounded overflow-hidden shadow-md mt-8 hover:shadow-lg hover:scale-105 transition ease-out  delay-150 duration-500">
        <img class="w-full h-32 sm:h-48 object-cover" src="<?=  $country['image'] ?>" alt="image">
        <div class="m-4">
            <span class="font-bold block text-gray-500 text-xl mb-2"> <?= $country['name'] ?></span>
            <span class="font-bold block text-gray-500">capital:  <?= $country['capital']?></span>
            <span class="font-bold block text-gray-500">population:  <?= number_format((float)$country['population'], 0, ' ', ' ') ?></span> 
        </div>
    </div>
<?php endif ?>