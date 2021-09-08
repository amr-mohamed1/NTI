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


session_start();
if (isset($_COOKIE['name'])){

echo "welcome :- " . $_COOKIE['name'] . "<br>" ;
echo "your email is  :- " . $_COOKIE['email'] . "<br>" ;
echo "your adress is  :- " . $_COOKIE['adress'] . "<br>" ;
echo "your gender is  :- " . $_COOKIE['gender'] . "<br>" ;
echo "your linkedin is  :- " . $_COOKIE['linkedin'] . "<br>" ;
echo "your profile img is  :- <img style='width:250px;display:block;margin-top:25px' src='img/" . $_COOKIE['img'] . "' alt ='prof img'>". "<br>" ;

?>

<?php
}else{
    header("location:day4.php");
}