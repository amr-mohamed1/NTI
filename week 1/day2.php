<?php

// for ($i=0;$i<112;$i++){
//   if($i%2 != 0){
//     echo "<div style='width:100px;height:100px;background-color:#000;display:inline-block;'>.</div>";
//   }else{
//     echo "<div style='width:100px;height:100px;background-color:#fff;display:inline-block;border:1px solid #000'>.</div>";
//   }
// }



// $student = ['name' => 'Amr' , 'Level' => 3 , 'GPA' => 3.4];
// foreach($student as $key=>$out){
//   echo $key . "  " . $out;
//   echo "<br>";
// }





//============ day 2 task ==============//


// function number 1
$arr = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
function  next_letter($letter) {
    global $arr;
    $next_ele = array_search($letter,$arr);
    if($letter == "z"){
        echo "a" . "<br>";
    }else{
        echo $arr[$next_ele+1] . "<br>";
    }
}
next_letter("b");




//function number 2
function file_name($link){

    // First Idea
    echo basename($link) . "<br>";


    // Second Idea
    $link_items = explode("/",$link);
    $link_len = count($link_items);
    echo $link_items [$link_len -1];

}

file_name("www.example.com/public_html/index.php");

?>