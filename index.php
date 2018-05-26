<?php
  require_once('includes/top.php');
?>
  </head>
  <body>
    <?php 
      require_once('includes/header.php');

      $number_of_posts=3;

      if (isset($_GET['page'])) {
        $page_id=$_GET['page'];
      }
      else{
        $page_id=1;
      }

      if (isset($_GET['cat'])) {
        $cat_id=$_GET['cat'];
        $cat_query="SELECT * FROM categories Where id=$cat_id";
        $cat_run= mysqli_query($con, $cat_query);
        $cat_row=mysqli_fetch_array($cat_run);
        $cat_name=$cat_row['category'];
      }


      if(isset($_POST['search'])){
        $search=$_POST['search-title'];
        $all_post_query = "SELECT * FROM posts where status='publish'";
        $all_post_query .=" AND tags LIKE '&$search&'";
        $all_post_run = mysqli_query($con, $all_post_query);
        $all_posts=mysqli_num_rows($all_post_run);
        $total_pages= ceil($all_posts/$number_of_posts);
        $posts_start_from=($page_id -1)*$number_of_posts;

      }
      else{
        $all_post_query = "SELECT * FROM posts where status='publish'";
        if(isset($cat_name)){
          $all_post_query .=" AND categories='$cat_name'";
        }
        $all_post_run = mysqli_query($con, $all_post_query);
        $all_posts=mysqli_num_rows($all_post_run);
        $total_pages= ceil($all_posts/$number_of_posts);
        $posts_start_from=($page_id -1)*$number_of_posts;
      }
    ?>

    <div class="jumbotron">
      <div class="container">
        <div id="details" class="animated slideInLeft">
          <h1 >GetTheEdge<span>&nbspBlog</span></h1>
          <p style="color:white;">An ultimate source of amazing stories.</p>
        </div>
      </div>
      <img src="images/header4.jpg">
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <?php 
              if(isset($_POST['search'])){
                $search=$_POST['search-title'];

                $query="SELECT * FROM posts WHERE status='publish'";
                $query.=" AND tags LIKE '%$search%'";
                $query.=" ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";

              }
              else{
                $query="SELECT * FROM posts WHERE status='publish'";
                if(isset($cat_name)){
                  $query.=" AND categories='$cat_name'";
                }
                $query.=" ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";
              }
              $run=mysqli_query($con, $query);
              if(mysqli_num_rows($run) > 0){
                while($row = mysqli_fetch_array($run)){
                  $id=$row['id'];
                  $date=getdate($row['date']);
                  $day= $date['mday'];
                  $month=$date['month'];
                  $year=$date['year'];
                  $title=$row['title'];
                  $author=$row['author'];
                  $author_image=$row['author_image'];
                  $image=$row['image'];
                  $categories=$row['categories'];
                  $tags=$row['tags'];
                  $post_data=$row['post_data'];
                  $views=$row['views'];
                  $status=$row['status'];

            ?>
            <!-- Post 1 -->
            <div class="post">
              <div class="row">
                <div class="col-md-2 post-date">
                  <div class="day"><?php echo $day; ?></div>
                  <div class="month"><?php echo $month; ?></div>
                  <div class="year"><?php echo $year; ?></div>
                </div>
                <div class="col-md-8 post-title">
                  <a href="post.php?post_id=<?php echo $id ?>"><h2><?php echo $title; ?></h2></a>
                  <p>Written by: <span><?php echo $author ?></span></p>
                </div>
                <div class="col-md-2 profile-picture">
                  <img src="images/<?php echo $author_image ?>" alt="Profile Picture" class="img-circle">
                </div>
              </div>
              <a href="post.php?post_id=<?php echo $id ?>"><img src="images/<?php echo $image ?>"></a>
              <p class="desc">
                 <?php echo substr($post_data, 0,300)."....."; ?>
              </p>
              <a href="post.php?post_id=<?php echo $id ?>" class="btn btn-primary">Read More</a>
              <div class="bottom">
                <span class="first"><i class="fa fa-file" aria-hidden="true"></i> <a href="index.php?cat=<?php echo $id ?>"><?php echo $categories ?></a></span>|
                <span class="sec"><i class="fa fa-comment" aria-hidden="true"></i> <a href="#">Comment</a></span>
              </div></div>  
            <!-- End of post -->
           <?php 
              }
            }
              else{
                echo "<center><h2>No Post Available</h2></center>";
              }
            ?>
            <!-- Pagination Start -->
            <nav id="pagination">
              <ul class="pagination">
                <?php 

                  for ($i=1; $i <=$total_pages ; $i++) { 
                    echo "<li class='".($page_id == ".$i." ? 'active': '')."'><a href='index.php?page=".$i. "&" . (isset($cat_name)? "cat=$cat_id": "")."'>$i</a></li>";
                  }
                ?>
              </ul>
            </nav>
            <!-- Pagination End -->
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