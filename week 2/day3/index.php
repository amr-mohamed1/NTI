<?php 
  ob_start(); 
  session_start();
  $page_name = "Hosters";
  $style = "hosters.css";
  $script = "";
  include "init.php"; 
  $sql1 = "select * from item";
  $op1 = mysqli_query($con,$sql1);
  // if(isset($_SESSION["delete"])){
  //     echo $_SESSION["delete"];
  // }
  if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["search"])){
  $search = filter_var($_POST["search"] , FILTER_SANITIZE_STRING);

  $sql2 = "select * from item where title like '%$search%' or content like '%$search%'";
  $op2 = mysqli_query($con,$sql2);

//      echo  mysqli_error($con);
// exit();


  if(isset($op2)){?>
              <div class="row">
                <?php while($item_data = mysqli_fetch_assoc($op2)){?>
                <div class="col-md-4">
                  <div class="article">
                        <img src="img/<?php echo $item_data['imt']?>" alt="image">
                        <h3><?php echo $item_data['title']?></h3>
                        <p><?php echo $item_data['content']?></p>
                        </div>
                </div>

                  <?php }?>
                  </div>
 <?php }


}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card mt-4">
            <div class="card-header">
              <h3 class="card-title">To Do List</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
              <div class="hosters_options mb-2">
                <a href="add_item.php" class="btn btn-info">Add <i class="fas fa-user-plus ml-1"></i></a>
              </div>
                <div class="row">
                  <form style="margin: auto !important;" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                <div class="ui icon input">
                  <input style="width: 500px;" name="search" type="text" placeholder="Search...">
                  <i class="search icon"></i>
                </form>
                </div>
              </div>
              <br>
              <br>
              <hr>
              <br>
              <br>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
  </section>
</div>


<?php 





/*




hospital 
  1- admin
  2- doctor ---------- appointment مواعيد
  3- patient ------------- يحجز المواعيد


  doctor            patient
  1       =         m


  patient           times
  1       =         1


  patient           pocket
  1       =         1


  doctor            times
  1       =         m



  admin
  id    name    email   password

  doctor table
  id    name    email     phone    
  1     amr     ex        01221       


  times
  id    start_time    end_time    doctor_id
  1     12pm            5am         1

  patient
  id    name    selected_doctor 
  1     ahmed         1                 


  pocket
  id    times   patient_id










*/