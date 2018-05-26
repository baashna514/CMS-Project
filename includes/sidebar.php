<div class="widgets">
            <form action="index.php" method="post">
              <div class="input-group">
                <input type="text" name="search-title" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <input type="submit" value="Go" class="btn btn-default" name="search">
                </span>
              </div><!-- input-group Close -->
            </form>
</div> <!-- widgets Close -->

<div class="widgets">
              <div class="popular">
                <h4>Popular Posts</h4>
                <!-- 1st POst -->
                <?php 
                  $p_query = "SELECT * FROM posts WHERE status='publish' ORDER BY views DESC LIMIT 5";
                  $p_run = mysqli_query($con, $p_query);
                  if (mysqli_num_rows($p_run) > 0){
                    while ($row = mysqli_fetch_array($p_run)){
                      $p_id=$row['id'];
                      $p_title=$row['title'];
                      $p_image=$row['image'];
                      $p_date=getdate($row['date']);
                      $p_day= $p_date['mday'];
                      $p_month=$p_date['month'];
                      $p_year=$p_date['year'];
                ?>
                
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="post.php?post_id=<?php echo $p_id ?>"><img src="images/<?php echo $p_image ?>"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="post.php?post_id=<?php echo $p_id ?>"><h5><?php echo $p_title ?></h5></a>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo "$p_day $p_month $p_year" ?></p>
                  </div>
                </div>
               <?php 
                }
                  }
                  else{
                    echo "<center><h2>No Post Available</h2></center>";
                  }
               ?>
              </div>
</div> <!-- widgets Close -->

<div class="widgets">
              <div class="popular">
                <h4>Recent Posts</h4>
                <!-- 1st POst -->
                <?php 
                  $p_query = "SELECT * FROM posts WHERE status='publish' ORDER BY id DESC LIMIT 5";
                  $p_run = mysqli_query($con, $p_query);
                  if (mysqli_num_rows($p_run) > 0){
                    while ($row = mysqli_fetch_array($p_run)){
                      $id=$row['id'];
                      $title=$row['title'];
                      $image=$row['image'];
                      $date=getdate($row['date']);
                      $day= $date['mday'];
                      $month=$date['month'];
                      $year=$date['year'];
                ?>
                
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="post.php?post_id=<?php echo $p_id ?>"><img src="images/<?php echo $image ?>"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="post.php?post_id=<?php echo $p_id ?>"><h5><?php echo $title ?></h5></a>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo "$p_day $p_month $p_year" ?></p>
                  </div>
                </div>
               <?php 
                }
                  }
                  else{
                    echo "<center><h2>No Post Available</h2></center>";
                  }
               ?>
              </div>
</div> <!-- widgets Close -->

            

<div class="widgets">
              <div class="popular">
                <h4>Categories</h4>
                <!-- 1st POst -->
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                      <ul>
                        <?php 
                          $c_query="SELECT * FROM categories";
                          $c_run=mysqli_query($con, $c_query);
                          if(mysqli_num_rows($c_run) > 0){
                            $count=2;
                            while($c_row = mysqli_fetch_array($c_run)){
                              $c_id = $c_row['id'];
                              $c_category = $c_row['category'];
                              $count=$count+1;
                              if ($count % 2==1) {
                                echo "<li><a href='index.php?cat=$c_id'>$c_category</a></li>";
                              }
                            }
                          }
                          else{
                            echo "<p>No Category Available</p>";
                          }
                        ?>
                      </ul>
                  </div>
                    <div class="col-xs-6">
                      <ul>
                        <?php 
                          $c_query="SELECT * FROM categories";
                          $c_run=mysqli_query($con, $c_query);
                          if(mysqli_num_rows($c_run) > 0){
                            $count=2;
                            while($c_row = mysqli_fetch_array($c_run)){
                              $c_id = $c_row['id'];
                              $c_category = $c_row['category'];
                              $count=$count+1;
                              if ($count % 2==0) {
                                echo "<li><a href='index.php?cat=$c_id'>$c_category</a></li>";
                              }
                            }
                          }
                          else{
                            echo "<p>No Category Available</p>";
                          }
                        ?>
                      </ul>
                    </div>
                </div>
              </div>
</div> <!-- widgets Close -->