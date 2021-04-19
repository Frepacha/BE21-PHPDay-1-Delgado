<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta  charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>Php Advance-1</title>
   </head>
   <style>  
    h2{
    display: flex;
    justify-content: center;
    color: whitesmoke;
    background-color: grey;
    padding: 3rem 0;
    }
    h1{
    display: flex;
    justify-content: center;
    color: green;
    background-color: burlywood;
    padding: 2rem 0;
    }
    </style>

   <body>      
<h1>Associative Array</h1>
   <h2>
       <?php
       /* Associative Array */
       $characters = array(
           "Mickey Mouse" => 93,
           "Super Mario" => 35,
           "Goku" => 37,
           "Pikachu" => 25
       );
       echo "The age of Mickey Mouse is ". $characters['Mickey Mouse'] . "<br/>";
       echo "The age of Super Mario is " . $characters['Super Mario']. "<br/>" ;
       echo "The age of Goku is ". $characters['Goku'] . "<br/>";
       echo "The age of Pikachu is ". $characters['Pikachu'] . "<br/>";
       ?>
    </h2>
<h1>Multidimensional Array </h1>
    <h2>

       <?php
       /* Multidimensional Array */
       $characters2 = array(
        "Mickey Mouse" => array( 
                        "age"=>93,
                        "Nationality"=>"American",
                        "works in"=> "Disney-Land"),

        "Super Mario" => array( 
                        "age"=>35,
                        "Nationality"=>"Japanese",
                        "works in"=> "Nintendo Entertainment System"),

        "Goku" => array( 
                        "age"=>37,
                        "Nationality"=>"Japanese",
                        "works in"=> "Capsule Coporation"),

        "Pikachu" => array( 
                        "age"=>25,
                        "Nationality"=>"Japanese",
                        "works in"=> "Nintendo Entertainment System"),

       );
       echo "The age of Mickey Mouse is ". $characters2['Mickey Mouse']['age'] . " it works in ". $characters2['Mickey Mouse']['works in'] . " and its nationality is ".$characters2['Mickey Mouse']['Nationality'] ."<br/>";

       echo "The Nationality of Super Mario is " . $characters2['Super Mario']['Nationality']. "<br/>" ;
       echo "Goku works in ". $characters2['Goku']['works in'] . "<br/>";
       echo "The age of Pikachu is ". $characters2['Pikachu']['age']." and it works in ". $characters2['Pikachu']['works in'] ."<br/>";
       ?>
    </h2>
   </body>
</html>