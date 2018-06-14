<?php 

include_once 'DBh.php';

/* Følgende kode inserter vores comments ind i databasen */

$Sender = $_POST['Sender'];
$Content = $_POST['Content'];

	$sql = "INSERT INTO comment (profilId,  forumId, content) VALUES ('$Sender','3', '$Content');";
	mysqli_query($conn, $sql);

	header("Location: ../Merc-Portalen/comment.php?=success");
	


	?>