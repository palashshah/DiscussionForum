<?php
	require('utility.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333333;
		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 16px;
		    text-decoration: none;
		}

		li a:hover {
		    background-color: #ddd;
		}
		#fixedbar ul li a, #fixedbar ul li a:visited {
		    color: #00f;
		}
		h2,h3,h4,h5 {
		   text-align: center;
		}
		
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- <div class="container-fluid no-padding">
		<img src="../images/header1.svg" class="img-rounded" alt="Header Image">
	</div> -->
	<h1 align="center">Online Discussion Forum</h1>
	<?php if(isset($_SESSION["name"])){ ?>
	<ul class='list-inline'>
		<li><a href='home.php'>Home</a></li>
		<li><a href='users.php'>Users</a></li>
		<li><a href='ques.php'>Questions</a></li>
		<li><a href='ans.php'>Answers</a></li>
		<li><a href='newcat.php'>Add Category</a></li>	
	</ul>
	<?php }else{ ?>
	<ul class='list-inline'>
		<li><a href='home.php'>Home</a></li>
		<li><a href='aboutus.php'>About Us</a></li>
		<li><a href='contactus.php'>Contact Us</a></li>
	</ul>
	<?php } ?>
</body>
</html>