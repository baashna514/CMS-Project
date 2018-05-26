<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GetTheEdge | Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GetTheEdge</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a></li>
            <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Post</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
            <li><a href="#"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active"> 
              <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">50</span> 
              <i class="fa fa-file-text" aria-hidden="true"></i> All Posts
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">15</span>
              <i class="fa fa-comment" aria-hidden="true"></i> Comments
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">15</span>
              <i class="fa fa-folder-open" aria-hidden="true"></i> Categories
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">20</span>
              <i class="fa fa-users" aria-hidden="true"></i> Users
            </a>
          </div>
        </div>
        <div class="col-md-9">
          <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Statistics Overview</small></h1><hr>
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Footer Start -->
    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-4 item social">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
          </div>
          <p class="copyright">2018 © <a href="">gettheedge.com</a>. All Rights Reserved.</p>
        </div>
    </footer>
        </div>
    <!-- Footer End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>