<?php 
  ob_start(); 
  session_start();
  $page_name = "Hosters";
  $style = "hosters.css";
  $script = "";
  include "init.php"; 
  $sql = "select * from list";
  $op = mysqli_query($con,$sql);
  if(isset($_SESSION["delete"])){
      echo $_SESSION["delete"];
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
                <a href="add_hoster.php" class="btn btn-info">Add <i class="fas fa-user-plus ml-1"></i></a>
              </div>
              <table style="width: 100% !important" class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start_time</th>
                    <th>End_time</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i = 1;
                        while($item_data = mysqli_fetch_assoc($op)){
                  ?>
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td><?php echo $i?></td>
                    <td><?php echo $item_data['title']?></td>
                    <td><?php echo $item_data['description']?></td>
                    <td><?php echo $item_data['start_time']?></td>
                    <td><?php echo $item_data['end_time']?></td>

                
                    <td><a href="delete.php?id=<?php echo  $item_data['id'];?>" class="btn btn-danger"><i class="table_icon far fa-trash-alt ml-1"></i></a></td>
                    </td>
                  </tr>
                        <?php $i++;  }?>
                </tbody>
              </table>
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
?>