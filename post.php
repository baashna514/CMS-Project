<?php 
  require_once('includes/top.php');
?>
  </head>
  <body>
    <?php 
      require_once('includes/header.php');
    ?>

<?php 
  if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $query = "SELECT * FROM posts WHERE status='publish' AND id='$post_id'";
    $run=mysqli_query($con, $query);
    if(mysqli_num_rows($run)>0){
      $row=mysqli_fetch_array($run);
      $id=$row['id'];
      $date=getdate($row['date']);
      $day= $date['mday'];
      $month=$date['month'];
      $year=$date['year'];
      $title=$row['title'];
      $image=$row['image'];
      $author_image=$row['author_image'];
      $author=$row['author'];
      $categories=$row['categories'];
      $post_data=$row['post_data'];
    }
    else{
      header('location: index.php');
    }
  }
?>

    <div class="jumbotron">
      <div class="container">
        <div id="details" class="animated slideInLeft">
          <h1>Custom<span>&nbspPosts</span></h1>
          <p style="color:white;">We are available 24x7. So feel free to contact us.</p>
        </div>
      </div>
      <img src="images/header4.jpg">
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post">
              <div class="row">
                <div class="col-md-2 post-date">
                  <div class="day"><?php echo $day ?></div>
                  <div class="month"><?php echo $month ?></div>
                  <div class="year"><?php echo $year ?></div>
                </div>
                <div class="col-md-8 post-title">
                  <a href="#"><h2><?php echo $title ?></h2></a>
                  <p>Written by: <span><?php echo $author ?></span></p>
                </div>
                <div class="col-md-2 profile-picture">
                  <img src="images/<?php echo $author_image ?>" alt="Profile Picture" class="img-circle">
                </div>
              </div>
              <a href="images/<?php echo $image ?>"><img src="images/<?php echo $image ?>"></a>
              <p class="desc">
                 <?php echo $post_data ?>
              </p>
              <div class="bottom">
                <span class="first"><i class="fa fa-file" aria-hidden="true"></i> <a href="#"><?php echo $categories ?></a></span>|
                <span class="sec"><i class="fa fa-comment" aria-hidden="true"></i> <a href="#">Comment</a></span>
              </div>
            </div>
            <div class="related-posts">
              <h3>Related Posts</h3>
              <hr>
              <div class="row">
                <?php 
                  $r_query="SELECT * FROM posts WHERE status='publish' AND title LIKE '%$title%' LIMIT 3";
                  $r_run=mysqli_query($con, $r_query);
                  while($r_row=mysqli_fetch_array($r_run)){
                    $r_id= $r_row['id'];
                    $r_title= $r_row['title'];
                    $r_image= $r_row['image'];
                  
                ?>
                <div class="col-sm-4">
                  <a href="post.php?post_id=<?php echo $r_id; ?>">
                    <img src="images/<?php echo $r_image; ?>">
                    <h4><?php echo $r_title; ?></h4>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="author">
              <h3>Author</h3>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <img src="images/<?php echo $author_image; ?>" class="img-circle">
                </div>
                <div class="col-sm-9">
                  <h4><?php echo $author; ?></h4>
                  <p>A self motivated, hard-working, and creative Web Developer seeks the position of web developer to provide quality support to company IT team in developing.</p>
                </div>
              </div>
            </div>
            <?php 
              $c_query="SELECT * FROM comments WHERE status='approve' AND post_id='$post_id' ORDER BY id DESC";
              $c_run=mysqli_query($con, $c_query);
              if(mysqli_num_rows($c_run)>0){


            ?>
            <div class="comment">
              <h3>Comments</h3>
              <?php 
                while($c_row=mysqli_fetch_array($c_run)){
                  $c_id=$c_row['id'];
                  $c_name=$c_row['name'];
                  $c_username=$c_row['username'];
                  $c_image=$c_row['image'];
                  $c_comment=$c_row['comment'];
                
              ?>
              <hr>
              <div class="row single-comment">
                <div class="col-sm-2">
                  <img src="images/<?php echo $c_image; ?>" class="img-circle">
                </div>
                <div class="col-sm-10">
                  <h4><?php echo $c_name; ?></h4>
                  <p><?php echo $c_comment; ?></p>
                </div>
              </div>
              <?php } ?>
            </div>
            <?php } ?>

            <div class="comment-box">
              <div class="row">
                <div class="col-md-12">
                <h2>Comment</h2>
                <hr>
                <form action="" method="post">
                  <div class="form-group">
                    <label for="full-name">Full Name*:</label>
                    <input type="text" name="name" value="<?php if(isset($cs_name)){ echo $cs_name; } ?>" id="full-name" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email*:</label>
                    <input type="text" name="email" value="<?php if(isset($cs_email)){ echo $cs_email; } ?>" id="Email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Website">Website:</label>
                    <input type="text" name="website" value="<?php if(isset($cs_website)){ echo $cs_website; } ?>" id="Website" class="form-control" placeholder="Website">
                  </div>
                  <div class="form-group">
                    <label for="Comment">Comment*:</label>
                    <textarea id="Comment" name="comment" class="form-control" cols="30" rows="10" placeholder="Your comment should be here"> <?php if(isset($cs_comment)){ echo $cs_comment; } ?></textarea>
                  </div>
                  <input type="submit" name="submit" value="Submit Comment" class="btn btn-primary">
                  <?php 
                    if(isset($error_msg)){
                      echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                    }
                  ?>


<?php 
              if(isset($_POST['submit'])){
                $cs_name=$_POST['name'];
                $cs_email=$_POST['email'];
                $cs_website=$_POST['website'];
                $cs_comment=$_POST['comment'];
                $cs_date=time();
                if(empty($cs_name) or empty($cs_email) or empty($cs_comment)){
                  echo "<span style='color:red;' class='pull-right'>All (*) fields are required.</span>";
                }
                else{
                  $cs_query="INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES (NULL, '$cs_date', '$cs_name', 'user', '$post_id', '$cs_email', '$cs_website', 'admin.jpg', '$cs_comment', 'pending')";
                  if(mysqli_query($con, $cs_query)){
                    $msg="Comment submitted and waiting for approval";
                    $cs_name="";
                    $cs_email="";
                    $cs_website="";
                    $cs_comment="";
                  }
                  else{
                    $error_msg="Comment has not be submitted";
                  }

                }
              }
            ?>


                  <?php

                    if(isset($error_msg)){
                      echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                    }
                    else if(isset($msg)){
                      echo "<span style='color:green;' class='pull-right'>$msg</span>";
                    }
                  ?>
                </form>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <?php 
              require_once('includes/sidebar.php');
            ?>
          </div>
        </div>
      </div>
    </section>

    <div class="footer-dark">
      <?php 
        require_once('includes/footer.php');
      ?>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>