<?php
	require('utility.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.active {
		    background-color: #4CAF50;
		    color: white;
		}
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
		h2,h3,h4,h5 {
		   text-align: center;
		}
		#fixedbar ul li a, #fixedbar ul li a:visited {
		    color: #00f;
		}
	</style>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<!-- <div class="container-fluid no-padding">
		<img src="images/header1.svg" class="img-rounded" alt="Header Image">
	</div> -->
	<h1 align="center">Online Discussion Forum</h1>
	<?php if(isset($_SESSION["name"])){ ?>
	<ul class='list-inline'>
		<li><a href='userhome.php'>Home</a></li>
		<li><a href='ques.php'>My Questions</a></li>
		<li><a href='ans.php'>My Answers</a></li>
		<li><a href='newtopic.php'>Add Topic</a></li>
		<li><a href='aboutus.php'>About Us</a></li>
	</ul>
	<?php } else{ ?>
	<ul class='list-inline'>
		<li><a href='home.php'>Home</a></li>
		<li><a href='aboutus.php'>About Us</a></li>
		<li><a href='contactus.php'>Contact Us</a></li>
	</ul>
	<?php } ?>
</body>
</html>