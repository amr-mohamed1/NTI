<?php 
// session_start();
// if (isset($_SESSION['name'])){
// echo "welcome :- " . $_SESSION['name'] . "<br>" ;
// echo "your email is  :- " . $_SESSION['email'] . "<br>" ;?>
 <!-- <p class="card-text"><a class="btn btn-primary" href="<?php echo "img/" .$_SESSION['cv']; ?>" target="_blank" 
 type="application/octet-stream" download="<?php echo "cv" ; $file_exten = explode(".",$_SESSION['cv']);?><?php echo "." . $file_exten[1] ?>">تحميل الملف</a></p> -->
 <?php
// }else{
//     header("location:day4.php");
// }


// session_start();
// if (isset($_COOKIE['name'])){

// echo "welcome :- " . $_COOKIE['name'] . "<br>" ;
// echo "your email is  :- " . $_COOKIE['email'] . "<br>" ;
// echo "your adress is  :- " . $_COOKIE['adress'] . "<br>" ;
// echo "your gender is  :- " . $_COOKIE['gender'] . "<br>" ;
// echo "your linkedin is  :- " . $_COOKIE['linkedin'] . "<br>" ;
// echo "your profile img is  :- <img style='width:250px;display:block;margin-top:25px' src='img/" . $_COOKIE['img'] . "' alt ='prof img'>". "<br>" ;

// ?>

<?php
// }else{
//     header("location:day4.php");
// }

$data_base = fopen("users.txt","r") or die("the file is not found");
$index = 0;
while(!feof($data_base)){
    $data = fgets($data_base);
    $arr =explode("=",$data);
    $rows = explode("**",$data);
    echo count($rows);
    for($i=0;$i<count($rows)-1;$i++){
    echo "student name :- " . filter_var($arr[0+$index],FILTER_SANITIZE_STRING) . "<br>";
    echo "student email :- " . $arr[1+$index] . "<br>";
    echo "student adress :- " . $arr[2+$index] . "<br>";
    echo "student gender :- " . $arr[3+$index] . "<br>";
    echo "student linkedin :- " . $arr[4+$index] . "<br>";
    echo "student img :- " . $arr[5+$index] . "<br>";

    echo "<br><br><hr><br><br>";
    $index = $index + 6;
    }
}
fclose($data_base);