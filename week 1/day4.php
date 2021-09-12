<?php
// session_start();
//     if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_FILES["file_cv"]["name"]))
//     {
//         $name = $_POST["name"];
//         $email = $_POST["email"];
//         $file = $_FILES["file_cv"]["name"];
//         $file_tmp_name = $_FILES["file_cv"]["tmp_name"];
//         $type = $_FILES["file_cv"]["type"];
//         $extention_allowed = array("pdf","docx","xlsx");
//         @$extention = strtolower(end(explode(".",$file)));
//         if(in_array($extention,$extention_allowed)){
//             $final_file = rand(0,1000000) . "_" . $file ;
//             $destination = "img/" . $final_file ;
//             move_uploaded_file($_FILES["file_cv"]["tmp_name"],$destination);
//             $_SESSION['name']     = $_POST["name"];
//             $_SESSION['email']    = $_POST["email"] ;
//             $_SESSION['cv']       = $final_file;
//             header("location:dat4_students.php");
//         }else{
//             echo "<div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
//             " . $extention . ". غير مسموح باستخدام امتداد 
//             </div></div>";
//     }

//     };

?> 

<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="linkedin">your cv</label>
      <input style="direction: ltr;padding-bottom:36px;" name="file_cv" type="file" class="form-control">
    </div>





    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html> -->












<?php 


/*===============================================
                    Day 4 Task
=================================================*/

if($_SERVER["REQUEST_METHOD"] == "POST")
{

  $name = filter_var($_POST["name"] , FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
  $adress = filter_var($_POST["adress"], FILTER_SANITIZE_STRING);
  $gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
  $linkedin = filter_var($_POST["linkedin"], FILTER_SANITIZE_URL);
  $file = $_FILES["prof_img"]["name"];
  $file_tmp_name = $_FILES["prof_img"]["tmp_name"];
  $type = $_FILES["prof_img"]["type"];
  $extention_allowed = array("jpg","jpeg","png");
  @$extention = strtolower(end(explode(".",$file)));
  if(in_array($extention,$extention_allowed)){
      $final_file = rand(0,1000000) . "_" . $file ;
      $destination = "img/" . $final_file ;
      move_uploaded_file($_FILES["prof_img"]["tmp_name"],$destination);
      $arr=array($_POST["name"],$_POST["email"],$_POST["adress"],$_POST["gender"]);
      // setcookie("name",$_POST["name"],Time()+3600*24,"/");
      // setcookie("email",$_POST["email"],Time()+3600*24,"/");
      // setcookie("adress",$_POST["adress"],Time()+3600*24,"/");
      // setcookie("gender",$_POST["gender"],Time()+3600*24,"/");
      // setcookie("linkedin",$_POST["linkedin"],Time()+3600*24,"/");
      // $string_data = implode(",",$arr);
      // setcookie("data",$string_data,Time()+3600*24,"/");

      $data_base = fopen("users.txt","a") or die("the file is not found");
      $data = $name . " = " . $email . " = " . $adress . " = " . $gender . " = " . $linkedin . " = " . $final_file . " = " . "**";
      fwrite($data_base,$data);
      fclose($data_base);
            header("location:day4_profile.php");

  }else{
      echo "<div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
      " . $extention . ". غير مسموح باستخدام امتداد 
      </div></div>";
}

  

$ERROR_LIST = array();

if(empty($name) && !is_string($name)){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the name
</div>";
}if(empty($email)){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the email
</div>";
}if(empty($password) && strlen($password) < 6){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the password
</div>";
}if(empty($adress) && strlen($adress) == 10){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the adress , should be 10 chars
</div>";
}if(empty($gender) || $gender == "Choose..."){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the gender
</div>";
}if(empty($linkedin)){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the linkedin
</div>";
}


if (empty($ERROR_LIST)){
 echo "welcome MR/ " . $name . " , Your email is :- " . $email. " , your password is :- " . $password . " , your adriss is :- " . $adress . $gender . " , your linkedin account is :- " .$linkedin;
}



}


if (isset($ERROR_LIST)){
  foreach($ERROR_LIST as $error){
    echo $error . "<br>";
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="adress">adress</label>
      <input type="text" class="form-control" id="adress" placeholder="Enter adress" name="adress">
    </div>
    <div class="form-group">
      <label for="pwd2">Gender</label>
      <select name="gender" id="inputState" class="form-control">
      <option selected>Choose...</option>
        <option value="male">Male</option>
        <option value="female">Femail</option>
      </select>
     </div>
    <div class="form-group">
      <label for="linkedin">linkedin url</label>
      <input type="url" class="form-control" id="linkedin" placeholder="Enter linkedin" name="linkedin">
    </div>

    <div class="form-group">
      <label for="linkedin">your progile img</label>
      <input style="direction: ltr;padding-bottom:36px;" required name="prof_img" type="file" class="form-control">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>