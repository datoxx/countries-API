<?php 

    //connect db
    $pdo = new PDO('mysql:host=localhost;port=9000;dbname=countries', 'dato', '072fE290@');

    //throw error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // save date in datebase
    if(isset($_POST['submit'])) {
        function save_date($name, $capital, $population,  $region, $sub_region, $currencies, $languages, $save_image_location){
            global $pdo;
            //save date in datebase
             $statement = $pdo->prepare(
                "INSERT INTO country  (name, capital, population, region, currencies, languages, image, sub_region, create_date)
                VALUES (:name, :capital, :population, :region, :currencies, :languages, :image, :sub_region, :date)
                "
            );
        
            $statement->bindValue(':name', $name);
            $statement->bindValue(':capital', $capital);  
            $statement->bindValue(':population', $population);
            $statement->bindValue(':region', $region);
            $statement->bindValue(':currencies', $currencies);
            $statement->bindValue(':languages', $languages);
            $statement->bindValue(':image', $save_image_location);
            $statement->bindValue(':sub_region', $sub_region );
            $statement->bindValue(':date', date('Y-m-d H:i:s'));
            $statement->execute();
        };
    }

    // searhes county in datebase and return 
    if(isset($_POST['submit'])) {
        function seach_in_db($name){
            global $pdo;
            $statement = $pdo->prepare('SELECT * FROM country WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        };
    }

    // featch all date from datebase 
    if($_SERVER['PHP_SELF'] == '/reserches.php') {
        $statement = $pdo->prepare('SELECT * FROM country');
        $statement->execute();
        $countries = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // fetch specific country from datebase by country id
     if($_SERVER['PHP_SELF'] == '/country.php') {  
        $id = $_GET['id'] ?? null;

        $statement = $pdo->prepare('SELECT * FROM country WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $country = $statement->fetch(PDO::FETCH_ASSOC);
     }

     

