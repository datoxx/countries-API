<?php 

    if(isset($_POST['submit'])) {    

        $name = $_POST['country'];

        //connect db
        $pdo = new PDO('mysql:host=localhost;port=9000;dbname=countries', 'dato', '072fE290@');
        //throw error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //fetch country from db
        $statement = $pdo->prepare('SELECT * FROM country WHERE name = :name');
        $statement->bindValue(':name', $name);
        $statement->execute();
        $country = $statement->fetch(PDO::FETCH_ASSOC);

        if(!$country) {
             //fech date
            $url = "https://restcountries.com/v3.1/name/$name?fullText=true";
            $json = file_get_contents($url);

            //chek if country found
            if(!$json) {
                $error = 'country is not exsist';
            } else {
                $date = json_decode($json, true);

                // disply date
                $name = $date[0]['name']['common'];
                $capital = $date[0]['capital'][0];
                $population = $date[0]['population'];
                $region = $date[0]['region'];
                $sub_region = $date[0]['subregion'];
                $currencies = $date[0]['currencies'][array_keys($date[0]['currencies'])[0]]['name'];
                $languages = $date[0]['languages'][array_keys($date[0]['languages'])[0]];

                //save image
                $image =  $date[0]['flags']['svg'];

                if(!is_dir('images')) {
                    mkdir('images');
                }
                
                $images_dir = 'images/';
                $image_name = basename($image);
                $save_image_location = $images_dir . $image_name;
                file_put_contents($save_image_location, file_get_contents($image));



                //save date in db
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

                //fetch country from db
                $statement = $pdo->prepare('SELECT * FROM country WHERE name = :name');
                $statement->bindValue(':name', $name);
                $statement->execute();
                $country = $statement->fetch(PDO::FETCH_ASSOC);
            }
        }       
    }

 