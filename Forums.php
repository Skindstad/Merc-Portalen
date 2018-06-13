<?php 

include_once 'DBh.php';

$navn = $_POST['navn'];
$content = $_POST['content'];

	$sql = "INSERT INTO forum (profilId, content) VALUES ('$navn', '$content');";
	mysqli_query($conn, $sql);

	header("Location: ../Merc-Portalen/forum.php?forums=success");
	?>