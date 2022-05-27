<?php 

    if($_POST['submit']) {
        
        $name = $_POST['country'];
        
        //fech date
        $url = "https://restcountries.com/v3.1/name/$name?fullText=true";
        $json = file_get_contents($url);
        $date = json_decode($json, true);

        // disply date

        $name = $date[0]['name']['common'];
        $capital = $date[0]['capital'][0];
        $population = number_format((float)$date[0]['population'], 0, ' ', ' ');
        $region = $date[0]['region'];
        $sub_region = $date[0]['subregion'];
        $currencies = $date[0]['currencies'][array_keys($date[0]['currencies'])[0]]['name'];
        $languages = $date[0]['languages'][array_keys($date[0]['languages'])[0]];
        $image =  $date[0]['flags']['svg'];

    }