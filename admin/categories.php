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
          <h1><i class="fa fa-folder-open" aria-hidden="true"></i> Categories <small>Different Categories</small></h1><hr>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-folder-open" aria-hidden="true"></i> Categories</li>
          </ol>
          <div class="row">
            <div class="col-md-6">
              <form action="">
                  <div class="form-group">
                    <label for="category">Category Name*:</label>
                    <input type="text" id="category" class="form-control" placeholder="Category Name">
                  </div>
                  
                  <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6">
              <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Sr #</th>
                    <th>Category Name</th>
                    <th>Posts</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>5-10-2018</td>
                    <td>How To Learn Php in One Month</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>5-10-2018</td>
                    <td>How To Learn Php in One Month</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>5-10-2018</td>
                    <td>How To Learn Php in One Month</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                  </tr>
                </tbody>
              </table>
              <!-- Table of users End -->

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