<?php 
    require_once('includes/top.php');
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
          <h1><i class="fa fa-user-plus" aria-hidden="true"></i> Add User <small>Add New User</small></h1><hr>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</li>
          </ol>
          <?php 
            if(isset($_POST['submit'])){
              $date=time();
              $first_name=mysqli_real_escape_string($con, $_POST['first-name']);
              $last_name=mysqli_real_escape_string($con, $_POST['last-name']);
              $username=mysqli_real_escape_string($con, strtolower($_POST['username']));
              $username_trim=preg_replace("/\s+/",'',$username);
              $email=mysqli_real_escape_string($con, strtolower($_POST['email']));
              $password=mysqli_real_escape_string($con, $_POST['password']);
              $role=$_POST['role'];
              $profile_image=$_FILES['profile-image']['name'];
              $profile_image_tmp=$_FILES['profile-image']['tmp_name'];

              $check_query="Select * FROM users WHERE email='$email' OR username='$username'";
              $run_query=mysqli_query($con, $check_query);

              $salt_query="SELECT * FROM users ORDER BY id DESC LIMIT 1";
              $salt_run=mysqli_query($con, $salt_query);
              $salt_row=mysqli_fetch_array($salt_run);
              $salt=$salt_row['salt'];

              $password = crypt($password, $salt);

              if(empty($first_name) or empty($last_name) or empty($username) or empty($email) or empty($password) or empty($role) or empty($profile_image)){
                $error="All (*) fields are required.";
              }
              elseif($username != $username_trim){
                $spc= "Do not space between Username";
              }
              elseif(mysqli_num_rows($run_query) > 0 ){
                $email_username= "Username or Email already exist";
              }
              else{
                $insert_query= "INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`) VALUES (NULL, '$date', '$first_name', '$last_name', '$username', '$email', '$profile_image', '$password', '$role')";
                if(mysqli_query($con, $insert_query)){
                  $msg="User has been added.";
                  move_uploaded_file($profile_image_tmp, "images/uploaded/$profile_image");
                  $image_check="SELECT * FROM users ORDER BY id DESC LIMIT 1";
                  $image_run=mysqli_query($con, $image_check);
                  $image_row=mysqli_fetch_array($image_run);
                  $check_image=$image_row['image'];

                  $first_name="";
                  $last_name="";
                  $username="";
                  $email="";
                }
                else{
                  $error="User has not been added.";
                }
              }
            }
          ?>
          <div class="row">
            <div class="col-md-8">
              <form action="" method="post" id="myform" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="first-name">First Name:*</label>
                  <?php 
                    if(isset($error)){
                      echo "<span class='pull-right' style='color:red'>$error</span>";
                    }
                    elseif(isset($msg)){
                      echo "<span class='pull-right' style='color:green'>$msg</span>";
                    }
                    elseif(isset($spc)){
                      echo "<span class='pull-right' style='color:red'>$spc</span>";
                    }
                    elseif(isset($email_username)){
                      echo "<span class='pull-right' style='color:red'>$email_username</span>";
                    }
                    elseif(isset($no_error)){
                      echo "<span class='pull-right' style='color:green'>$no_error</span>";
                    }

                    
                  ?>
                  <input type="text" name="first-name" value="<?php if(isset($first_name)){echo $first_name;} ?>" id="first-name" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name:*</label>
                  <input type="text" name="last-name" value="<?php if(isset($last_name)){echo $last_name;} ?>" id="last-name" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="username">Username:*</label>
                  <input type="text" name="username" value="<?php if(isset($username)){echo $username;} ?>" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="email">Email:*</label>
                  <input type="text" name="email" value="<?php if(isset($email)){echo $email;} ?>" id="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <label for="password">Password:*</label>
                  <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="role">Role:*</label>
                  <select name="role" id="role" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="author">Author</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="profile-image">Profile Picture:*</label>
                  <input type="file" name="profile-image" id="profile-image">
                </div>
                <input type="submit" value="Add User" name="submit" class="btn btn-primary">
              </form>
            </div>
            <div class="col-md-4">
              <?php 
                if(isset($check_image)){
                  echo "<img src='images/uploaded/$check_image' width='100%'>";
                }
              ?>
            </div>
          </div>
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>