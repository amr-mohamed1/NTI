<?php 

$json = file_get_contents("http://shopping.mind-techs.com/api/Products/1/1/0/100/atoz");
$data = json_decode($json,true);
foreach($data["data"]as $id){
    echo "id is :- " . $id["products_id"] . "<br>";
    echo "slug is :- " . $id["products_slug"] . "<br>";

    echo "<br><br><hr><br><br>";
}
// echo var_dump($data);