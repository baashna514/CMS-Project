<?php 
    require_once('includes/top.php');

    if(isset($_GET['del'])){
      $del_id=$_GET['del'];
      $del_query="DELETE FROM `users` WHERE `users`.`id` = $del_id";
      if(mysqli_query($con, $del_query)){
        $msg= "Data Has Been Deleted";
      }
      else{
        $error= "Error In Deleting Data";
      }
    }

if(isset($_POST['checkboxes'])){
  foreach ($_POST['checkboxes'] as $user_id) {
    $bulk_option= $_POST['bulk-options'];
    if($bulk_option=='delete'){
      $bulk_del_query="DELETE FROM `users` WHERE `users`.`id` = $user_id";
      mysqli_query($con, $bulk_del_query);
    }
    elseif($bulk_option=='author'){
      $bulk_author_query="UPDATE `users` SET `role` = 'author' WHERE `users`.`id` = $user_id";
      mysqli_query($con, $bulk_author_query);
    }
    elseif($bulk_option=='admin'){
      $bulk_admin_query="UPDATE `users` SET `role` = 'admin' WHERE `users`.`id` = $user_id";
      mysqli_query($con, $bulk_admin_query);
    }
  }
}
?>
  </head>
  <body>
    <?php 
      require_once('includes/header.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <?php 
            require_once('includes/sidebar.php');
          ?>
        </div>
        <div class="col-md-9">
          <h1><i class="fa fa-users" aria-hidden="true"></i> Users <small>View All Users</small></h1><hr>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-users" aria-hidden="true"></i> Users</li>
          </ol>

          <?php

            $query="SELECT * FROM users ORDER BY id DESC";
            $run=mysqli_query($con, $query);
            if(mysqli_num_rows($run)>0){

          ?>
          <form action="" method="post">
          <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-xs-4">
                  <div class="form-group">
                    <select id="" name="bulk-options" class="form-control">
                      <option value="delete">Delete</option>
                      <option value="author">Change to author</option>
                      <option value="admin">Change to admin</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-8">
                  <input type="submit" class="btn btn-success" value="Apply">
                  <a href="add-user.php" class="btn btn-primary">Add New</a>
                </div>
              </div>
            </div>
          </div>
          <?php 
            if(isset($error)){
              echo "<span class='pull-right' style='color:red;'>$error</span>";
            }
            elseif(isset($msg)){
              echo "<span class='pull-right' style='color:green;'>$msg</span>";
            }
          ?>
          <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="selectallboxes"></th>
                    <th>Sr #</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while($row=mysqli_fetch_array($run)){
                      $id=$row['id'];
                      $date=getdate($row['date']);
                      $day= $date['mday'];
                      $month=substr($date['month'],0,3);
                      $year=$date['year'];
                      $first_name=$row['first_name'];
                      $last_name=$row['last_name'];
                      $username=$row['username'];
                      $email=$row['email'];
                      $img=$row['image'];
                      $password=$row['password'];
                      $usr_role=$row['role'];
                  ?>
                  <tr>
                    <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id; ?>"></td>
                    <td><?php echo $id; ?></td>
                    <td><?php echo "$day $month $year"; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo "$first_name $last_name"; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><img src="images/<?php echo $img; ?>" width="30px"></td>
                    <td><?php echo "*****"; ?></td>
                    <td><?php echo ucfirst($usr_role); ?></td>
                    <td><a href="add-user.php?edit=<?php echo $id; ?>"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="users.php?del=<?php echo $id; ?>"><i class="fa fa-times"></i></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
          </table>
          <?php 
            }
            else{
              echo "<center><h2>No user available.</h2></center>";
            }
          ?>
          </form>
          <!-- Table of users End -->
        </div>
      </div>
    </div>

    <!-- Footer Start -->
    <div class="footer-dark">
      <?php 
        require_once('includes/footer.php');
      ?>
    </div>
    <!-- Footer End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
$(document).ready(function(){
  $('#selectallboxes').click(function(event){
    if(this.checked){
      $('.checkboxes').each(function(){
        this.checked=true;
      });
    }
    else{
      $('.checkboxes').each(function(){
        this.checked=false;
      });
    }
  });
});
    </script>

  </body>
</html>