<?php 

include_once 'DBh.php';

/* Denne Inserter hvorers forums ind på databasen */

$navn = $_POST['navn'];
$content = $_POST['content'];

	$sql = "INSERT INTO forum (profilId, content) VALUES ('$navn', '$content');";
	mysqli_query($conn, $sql);

	header("Location: ../Merc-Portalen/forum.php?forums=success");
	?>