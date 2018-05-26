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
          <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Statistics Overview</small></h1><hr>
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</li>
          </ol>
          <div class="row tag-boxes">
            <div class="col-md-6 col-lg-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9">
                      <div class="text-right huge">11</div>
                      <div class="text-right">New Comments</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View All Comments</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="panel panel-red">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9">
                      <div class="text-right huge">14</div>
                      <div class="text-right">All Posts</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View All Posts</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="panel panel-yellow">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9">
                      <div class="text-right huge">20</div>
                      <div class="text-right">Users</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View All Users</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="panel panel-green">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-folder-open fa-5x"></i>
                    </div>
                    <div class="col-xs-9">
                      <div class="text-right huge">15</div>
                      <div class="text-right">All Categories</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View All Categories</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <hr>

          <h3>New Users</h3>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Sr #</th>
                <th>Date</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>5-10-2018</td>
                <td>Moin Abbas</td>
                <td>Baashna514</td>
                <td>Admin</td>
              </tr>
              <tr>
                <td>1</td>
                <td>5-10-2018</td>
                <td>Moin Abbas</td>
                <td>Baashna514</td>
                <td>Admin</td>
              </tr>
              <tr>
                <td>1</td>
                <td>5-10-2018</td>
                <td>Moin Abbas</td>
                <td>Baashna514</td>
                <td>Admin</td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">View All Users</a>
          <!-- Table of users End -->

          <hr>
          <h3>New Posts</h3>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Sr #</th>
                <th>Date</th>
                <th>Post Title</th>
                <th>Category</th>
                <th>Views</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>5-10-2018</td>
                <td>How To Learn Php in one Month</td>
                <td>Web Development</td>
                <td><i class="fa fa-eye" aria-hidden="true"></i> 14</td>
              </tr>
              <tr>
                <td>1</td>
                <td>5-10-2018</td>
                <td>How To Learn Php in one Month</td>
                <td>Web Development</td>
                <td><i class="fa fa-eye" aria-hidden="true"></i> 14</td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">View All Posts</a>
          <!-- Table of Posts End -->
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