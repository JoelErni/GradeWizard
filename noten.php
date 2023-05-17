<?php
	$servername = "localhost:3306";
	$username = "jeppecwx_root";
	$password = "gw69penis";
	$dbname = "jeppecwx_GradeWizard";
    $id = htmlspecialchars($_GET["id"]);

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$result = mysqli_query($conn, 'SELECT * FROM user WHERE id='.$id);

   while($row = mysqli_fetch_assoc($result))
   {
       $name = $row["name"];
       $vorname = $row["vorname"];
       $email = $row["email"];
       $anz_note = mysqli_fetch_assoc(mysqli_query($conn, "SELECT count(note) as total from note"))['total'];
   }
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Noten</title>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div style="display: flex;">
            <div style="flex: 1">
                <!-- HEADER -->
                <?php include("components/header.html"); ?>
            </div>
            <div style="flex: 7" class="article-background">
                <article>
                    <h1>Hallo <?php echo ucfirst($vorname); ?></h1>
                    <h2>Hier sind deine Noten:</h2>
                    <table class='table'>
                        <tr>
                            <th>Fach</th>
                            <th>Lehrperson</th>
                            <th>Datum</th>
                            <th>Note</th>
                        </tr>
                        <?php
                            $result = mysqli_query($conn, "SELECT * from note WHERE fk_userId=".$id);
                            while ($row = mysqli_fetch_assoc($result))
                            {
                                foreach ($row as $field => $value)
                                {
                                        if($field == 'fk_fachId'){
                                            $fach_id = $value;
                                        }
                                        if($field == 'fk_lehrpersonId'){
                                            $lehrperson_id = $value;
                                        }
                                        if($field == 'datum'){
                                            $datum = $value;
                                        }
                                        if($field == 'note'){
                                            $note =  $value;
                                        }
                                }

                                $lp_result = mysqli_query($conn, "SELECT name, vorname from user join lehrperson on lehrperson.fk_userId=user.id WHERE lehrperson.id=0");
                                while ($row = mysqli_fetch_assoc($lp_result))
                                {
                                    foreach ($row as $field => $value)
                                    {
                                            if($field == 'vorname'){
                                                $lehrperson_vorname = $value;
                                            }
                                            if($field == 'name'){
                                                $lehrperson_name = $value;
                                            }
                                    }
                                    $lehrperson = $lehrperson_vorname." ".$lehrperson_name;
                                }

                                echo "<tr>";
                                echo "<td>".$fach_id."</td>";
                                echo "<td>".$lehrperson."</td>";
                                echo "<td>".$datum."</td>";
                                echo "<td>".$note."</td>";
                                echo "</tr>";
                                
                            }
                        ?>
                    </table>
                </article>        
            </div>
        </div>
        <!-- FOOTER -->
        <?php include("components/footer.html"); ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>