<?php 

include_once 'DBh.php';



$Sender = $_POST['Sender'];
$forum = $_POST['forum'];
$Content = $_POST['Content'];

	$sql = "INSERT INTO comment (profilId,  forumId, content) VALUES ('$Sender','$forum', '$Content');";
	mysqli_query($conn, $sql);

	header("Location: ../Merc-Portalen/forum.php?comments=success");
	?>