<<<<<<< HEAD
<?php 

// $students = [

//     ["ahmed",20,3.2],
//     ["Omar",21,3.3,2],
//     ["Root",22,2.1]
//   ];
//   for ($i=0;$i<count($students);$i++){
//     for ($j=0;$j<count($students[$i]);$j++){

//         if($i == 1){
//             continue;
//         }else{
//             echo $students[$i][$j] . "<br>";
//         }
//     }
//   }


// if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["email"]))
// {
//  echo "data is valid ...... Welcome back mr / " .$_POST["name"];
// }else{
//     echo "name or email is empty";
// }

// ?>

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
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="pwd">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html> -->


<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{

  $name = filter_var($_POST["name"] , FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
  $adress = filter_var($_POST["adress"], FILTER_SANITIZE_STRING);
  $gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
  $linkedin = filter_var($_POST["linkedin"], FILTER_SANITIZE_URL);

  

$ERROR_LIST = array();

if(empty($name)){
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
}if(empty($adress) && strlen($adress) < 10){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the adress
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



}else{
    echo "please fill the data";
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
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
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





    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
=======
<?php 

// $students = [

//     ["ahmed",20,3.2],
//     ["Omar",21,3.3,2],
//     ["Root",22,2.1]
//   ];
//   for ($i=0;$i<count($students);$i++){
//     for ($j=0;$j<count($students[$i]);$j++){

//         if($i == 1){
//             continue;
//         }else{
//             echo $students[$i][$j] . "<br>";
//         }
//     }
//   }


// if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["email"]))
// {
//  echo "data is valid ...... Welcome back mr / " .$_POST["name"];
// }else{
//     echo "name or email is empty";
// }

// ?>

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
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="pwd">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html> -->


<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{

  $name = filter_var($_POST["name"] , FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
  $adress = filter_var($_POST["adress"], FILTER_SANITIZE_STRING);
  $gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
  $linkedin = filter_var($_POST["linkedin"], FILTER_SANITIZE_URL);

  

$ERROR_LIST = array();

if(empty($name)){
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
}if(empty($adress) && strlen($adress) < 10){
  $ERROR_LIST[] = "<div class=\"alert alert-danger text-right\" role=\"alert\">
  Pleaese fill the adress
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



}else{
    echo "please fill the data";
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
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
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





    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
 
</body>
>>>>>>> ecf920396e5cae40e0246aca06c34ec82da9a2f1
</html>
