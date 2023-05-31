<?php 
    $db_servername = "localhost:3306";
    $db_username = "jeppecwx_root";
    $db_password = "gw69penis";
    $db_name = "jeppecwx_GradeWizard";

    $id = htmlspecialchars($_GET["email"]);
    $pw = htmlspecialchars($_GET["password"]);

    $conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}



    header("Location: index.php");
?>