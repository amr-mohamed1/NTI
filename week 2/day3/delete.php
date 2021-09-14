<?php 
session_start();
include "init.php";
$item_id = $_GET["id"];
$sql = "DELETE FROM list WHERE id='$item_id'";
$op = mysqli_query($con,$sql);
header("Location:index.php");
$_SESSION["delete"] = "<script>
    toastr.error('Item Has Deleted Successfully')
</script>";
?>