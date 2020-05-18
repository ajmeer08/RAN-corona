<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style>
		body {
  background-image: url("/coronaran/client/6.jpg");
  background-color: Red;
  height: 500px;
  background-position: 1008*67;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

		</style>
	
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="Index.html">Back to home page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
			<div class="container" style="margin:8% auto;">
				<div class="col-sm-4 col-md-3">
				<br><br><br><br>
					<h2>live Status updation</h2>
					<p>The pace of the COVID-19 coronavirus outbreak means information is changing all the time. Here is the latest data on confirmed cases and deaths from the virus.The updation is only done by officials having login id.
				</p><br><br><br><br><br><br><br><br>
				</div>
				 <div class="col-sm-2 col-md-2 pull-right">
                   <div class="row">
                   
					<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<br><br><br><br>
					<h3 class="text-center">Signin Here!</h3>
					<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>
			</div>
		</div>
<hr>
 
</body>
</html>