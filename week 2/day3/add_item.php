<?php
  ob_start(); 
  $page_name = "Add to_do";
  $style = "to_do.css";
  $script = "to_do.js";
  include "init.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["title"]) && !empty($_POST["desc"]))
{
    $title = filter_var($_POST["title"] , FILTER_SANITIZE_STRING);
    $desc = filter_var($_POST["desc"] , FILTER_SANITIZE_STRING);
    $avatar_name            = $_FILES["img"]["name"];
    $size                   = $_FILES["img"]["size"];
    $tmp_name               = $_FILES["img"]["tmp_name"];
    $type                   = $_FILES["img"]["type"];
    $ext_allowed            = array("png","jpg","jpeg","mp4","");
    @$extention             = strtolower(end(explode(".",$avatar_name)));
    if(in_array($extention,$ext_allowed)){
        $avatar = rand(0,1000000) . "_" . $avatar_name ;
        $destination = "img/" . $avatar ;

         move_uploaded_file($tmp_name,$destination);
         $sql = "insert into item (title,content,imt) values ('$title','$desc','$avatar')";
         $op = mysqli_query($con,$sql);
    if($op){
        echo "
        <script>
            toastr.success('Great ,item has added successfully  .')
        </script>";
        header("Refresh:3;url=index.php");
    }else{
        echo "
        <script>
            toastr.error('Sorry This item didnot added.')
        </script>";
    }
        
    }
}
?>

<div class="container mb-3">
    <img class="add_item" src="layout/dss_header.gif" alt="item">
<h3 class="text-center mt-4 mb-4">Welcome To Website Dashboard .</h3>
<p class="text-center mb-5 pb-3">From This Page You Can Add New Hoster to Dashboard</p>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
  <div class="form-row">

        <div class="form-group col-md-6">
            <label>Title</label>
            <input style="direction: ltr;" name="title" type="text" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Description</label>
            <input style="direction: ltr;" name="desc" type="text" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Photo</label>
            <input style="direction: ltr;padding:0" name="img" type="file" class="form-control">
        </div>


  </div>
  <button type="submit" class="btn btn-primary mb-5 mt-2">Add</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="index.php">Back</a>
</form>
</div>


<?php

ob_end_flush();