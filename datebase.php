<?php 

    //connect db
    $pdo = new PDO('mysql:host=localhost;port=9000;dbname=countries', 'dato', '072fE290@');

    //throw error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

     

