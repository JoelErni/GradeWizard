<?php
	$servername = "localhost:3306";
	$username = "jeppecwx_root";
	$password = "gw69penis";
	$dbname = "jeppecwx_GradeWizard";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$result = mysqli_query($conn, 'SELECT * FROM user WHERE name="erni"');

   while($row = mysqli_fetch_assoc($result))
   {
       $id = $row["id"];
       $name = $row["name"];
       $vorname = $row["vorname"];
       $email = $row["email"];
       $anz_note = mysqli_fetch_assoc(mysqli_query($conn, "SELECT count(note) as total from note"))['total'];
   }
?>

<h1><?php echo $vorname ?> <?php echo $name ?></h1>
<h2><?php echo $email ?></h2>

<?php
   	$result = mysqli_query($conn, "SELECT * from note WHERE fk_userId=".$id);
	while ($row = mysqli_fetch_assoc($result))
	{
		foreach ($row as $field => $value)
		{
			if($field == 'note'){
			    echo  $value;
			}
		}

	}
?>