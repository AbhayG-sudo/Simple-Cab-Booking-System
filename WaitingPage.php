<?php
session_start();
echo '<html>
		<head>
		<title>Customer Request Pending</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<style>
			
		.loader {
		  border: 16px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 16px solid #3498db;
		  width: 120px;
		  height: 120px;
		  position: relative;
		  left: 45%;
		  top: 20%;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
		</style>
		</head>
		<body style="background-image:url(images/taxi_cab_pic.jpg); background-size: cover; ">';
		require('NavigationCustomer.html');

		echo'<div class= "container" style="background-image:url(images/download.jpg); background-size: cover;background-repeat:no-repeat;margin-top: 5%">
			<h1>Wait for Few Minutes & Then Click Below</h1>
		
			<a href="revenue.php"><h3>See Booking Status</h3></a>
			<div class="loader"></div>
			<p>&nbsp;</p>
		</div>

		</body></html> ';

?>