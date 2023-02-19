<?php
session_start();
$conn = oci_connect("ayush", "aayushji100");

$query="select f.driver_id,d.name,
		round(avg(rating),1) as rating
		from feedback f,driver d 
		where f.driver_id=d.driver_id
		group by f.driver_id,d.name";

$rating = oci_parse($conn, $query);
    oci_execute($rating);
    $existsRating=0;
while($row=oci_fetch_array($rating)){
	$driver_id=$row[0];
	$driver_name=$row[1];
	$ratings=$row[2];
	/*echo 'driver_id:'.$row[0];
	echo 'driver_name:'.$row[1];
	echo 'rating : ' . $row[2];*/
	$existsRating=1;
}





if($existsRating==1){
	require('NavigationDriver.html');
echo '<html>
				<head>
				<title>Show Ratings</title>
		 			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				</head>
					<body style="background-image:url(images/taxi_cab_pic.jpg); background-size: cover;">

						<div class= "container" style="background-color:white;background-position: center;margin-top: 5%">
						<h1><i>Ratings List  </i></h1>
	
								<table class="table table-hover table-bordered">
											
											<thead>
												<tr>
													<th>Driver ID</th>
													<th>Driver Name</th>
													<th>Rating</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>' . $driver_id .'</td>
													<td>'. $driver_name .'</td>
													<td>' .$ratings.' </td>
													
												</tr>
												</tbody>
								</table>
						</div>
					</body>
				</html>';
}
else{
	 echo '<html><script>
 	window.open("reglog.html","_self");
		alert("No Ratings yet :-(");
		
		</script>
		</html>';
}
oci_close($conn);
?>

