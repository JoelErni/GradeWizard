<?php
	$servername = "jeppy.pizza:3306";
	$username = "jeppecwx_script";
	$password = "GradeWizard69";
	$dbname = "GradeWizard";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
	if (!$conn) {
        echo "nono";
		die("Connection failed: " . mysqli_connect_error());
	}

	//$result5 = mysqli_query($conn, "SELECT * FROM car WHERE rank=5 AND fk_racetypeid = $type");
?>

<?php echo $_POST["e-mail"]; ?><br>
<?php echo $_POST["password"]; ?>

