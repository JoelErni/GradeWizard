<?php
	$servername = "localhost:3306";
	$username = "jeppecwx_root";
	$password = "gw69penis";
	$dbname = "test";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//$result5 = mysqli_query($conn, "SELECT * FROM car WHERE rank=5 AND fk_racetypeid = $type");
	//$result4 = mysqli_query($conn, "SELECT * FROM car WHERE rank=4 AND fk_racetypeid = $type");
	//$result3 = mysqli_query($conn, "SELECT * FROM car WHERE rank=3 AND fk_racetypeid = $type");
	//$result2 = mysqli_query($conn, "SELECT * FROM car WHERE rank=2 AND fk_racetypeid = $type");
	//$result1 = mysqli_query($conn, "SELECT * FROM car WHERE rank=1 AND fk_racetypeid = $type");
	//$resultb = mysqli_query($conn, "SELECT * FROM racetype WHERE racetypeid = $type");
	
	//while($rowb = mysqli_fetch_assoc($resultb))
	//{
	//	$gt = $rowb["bez"];
	//} 

?>
