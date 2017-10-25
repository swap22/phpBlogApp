<!DOCTYPE>

<html>
	<head>
		<title>Admin Dashboard</title>
                <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
				<link rel="stylesheet" href="resources/css/adminstyles.css">
	</head>
	<body>
		<div style="height: 10px; background: #27aae1;"></div>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				data-target="#collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
			<img style="margin-top: -12px;" src="resources/images/1.jpg" width=100;height=20;>
			</a>
				</div>
				<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li class="active"><a href="#" target="_blank">Blog</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Feature</a></li>
				</ul>
				<form action="Blog.php" class="navbar-form navbar-right">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Search" name="Search" >
				</div>
					<button class="btn btn-default" name="SearchButton">Go</button>
					
				</form>
				</div>
				
			</div>
		</nav>
				
	</body>
	<script src="vendors/js/jquery.min.js"></script>
    <script src="vendors/js/bootstrap.min.js"></script>
</html>