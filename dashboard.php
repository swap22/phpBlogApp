<?php require_once("Include/db.php"); ?>
<?php require_once("Include/Sessions.php"); ?>

<!DOCTYPE>

<html>
	<head>
		<title>Admin Dashboard</title>
                <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
				<link rel="stylesheet" href="resources/css/adminstyles.css">
	</head>
	<body>
		<div style="height: 10px; background: #830ab3;"></div>
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
		<div class="Line" style="height: 15px; background: #830ab3;"></div>
		<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-2">
			<br><br>
			<ul id="Side_Menu" class="nav nav-pills nav-stacked">
			<li class="active">
			<a href="dashboard.php">
			<span class="glyphicon glyphicon-th"></span>
			&nbsp;Dashboard</a></li>
			<li><a href="#">
			<span class="glyphicon glyphicon-list-alt"></span>
			&nbsp;Add New Post</a></li>
			<li><a href="#">
			<span class="glyphicon glyphicon-tags"></span>
			&nbsp;Categories</a></li>
			<li><a href="#">
			<span class="glyphicon glyphicon-user"></span>
			&nbsp;Manage Admins</a></li>
			<li><a href="#">
			<span class="glyphicon glyphicon-comment"></span>
			&nbsp;Comments
		
		<span class="label pull-right label-warning">
		
		</span>
				
		
			</a>	
			</li>
			<li><a href="#" target="_Blank">
			<span class="glyphicon glyphicon-equalizer"></span>
			&nbsp;Live Blog</a></li>
			<li><a href="#">
			<span class="glyphicon glyphicon-log-out"></span>
			&nbsp;Logout</a></li>	
				
			</ul>
			
			
			
			
			</div> <!-- Ending of Side area -->
			<div class="col-sm-10"> <!--Main Area-->
			<h1>Admin Dashboard</h1>
			
				
			
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>No</th>
					<th>Post Title</th>
					<th>Date &Time</th>
					<th>Author</th>
					<th>Category</th>
					<th>Banner</th>
					<th>Comments</th>
					<th>Action</th>
					<th>Details</th>
					
				</tr>
				<tr>
				
			<td></td>
			<td style="color: #5e5eff;">
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td><img src="" alt="banner"></td>
			<td>
		
		<span class="label pull-right label-success">
		
		</span>
				
				<span class="label  label-danger">
		
		</span>
				
					
				
			</td>
			<td>
			<a href="#">
			<span class="btn btn-warning">Edit</span>
			</a>
			<a href="#">
			<span class="btn btn-danger">Delete</span>
			</a>
			</td>
			<td>
			<a href="#" target="_blank">
			<span class="btn btn-primary"> Live Preview</span>
			</a>
			</td>
			</tr>
			
			
		






			</table>
		</div>
			
				
			</div> <!-- Ending of Main Area-->
			
		</div> <!-- Ending of Row-->
			
		</div> <!-- Ending of Container-->
		<div id="Footer">
		<hr><p>  Swapnil Sharma &copy;2017-2020 --- All right reserved.
		</p>	
		</div>
		<div style="height: 10px; background: #27AAE1;"></div> 


				
	</body>
	<script src="vendors/js/jquery.min.js"></script>
    <script src="vendors/js/bootstrap.min.js"></script>
</html>