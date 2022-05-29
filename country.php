<?php 

     $id = $_GET['id'] ?? null;

     if(!$id) {
         header('Location: reserches.php');
         exit;
     }
     //connect db
     $pdo = new PDO('mysql:host=localhost;port=9000;dbname=countries', 'dato', '072fE290@');
 
     //throw error
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
     //fetch date from db
     $statement = $pdo->prepare('SELECT * FROM country WHERE id = :id');
     $statement->bindValue(':id', $id);
     $statement->execute();
     $country = $statement->fetch(PDO::FETCH_ASSOC);
 

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

    <nav>
        <ul>
            <li><a href="index.php">serech</a></li> <br>
            <li><a href="reserches.php">see all reserches</a></li>
        </ul>
    </nav>

    <img src="<?=  $country['image'] ?>" alt="image">
    <h1> native name: <?= $country['name'] ?></h1>
    <h3>capital:  <?= $country['capital']?></h3>
    <h3>population:  <?= number_format((float)$country['population'], 0, ' ', ' ') ?></h3>
    <h3>region:  <?= $country['region']  ?></h3> 
    <h3>sub region:  <?= $country['sub_region'] ?></h3>
    <h3>currencies:  <?= $country['currencies'] ?></h3>
    <h3>languages:  <?= $country['languages'] ?></h3>

</body>
</html>