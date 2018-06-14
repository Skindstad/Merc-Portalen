<?php 

include_once 'DBh.php';



$Sender = $_POST['Sender'];
$Content = $_POST['Content'];

	$sql = "INSERT INTO comment (profilId,  , content) VALUES ('$navn', '$content');";
	mysqli_query($conn, $sql);

	header("Location: ../Merc-Portalen/forum.php?comments=success");
	?>