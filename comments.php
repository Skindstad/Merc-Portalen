<?php 

include_once 'DBh.php';



$Sender = $_POST['Sender'];
$Content = $_POST['Content'];

	$sql = "INSERT INTO comment (profilId,  forumId, content) VALUES ('$Sender','?', '$Content');";
	mysqli_query($conn, $sql);

	header("Location: ../Merc-Portalen/comment.php?=success");
	

/*funtion setComments($conn) {
	if (isset($_POST['commentSubmit'])) {
		$profilId = $_POST['Sender'];
		$message = $_POST['Content'];

		$sql = "INSERT INTO comment (profilId, forumId, content) VALUES ('$profilId', '?', '$message')";
		$result = $conn->query($sql)
	}
}
*/
funtion getComments($conn) {
	$sql = "SELECT * FROM comment";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo $row['message']
}


	?>