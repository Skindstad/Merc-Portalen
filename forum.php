<?php 

include 'navbar.php';
include 'DBh.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>


<body>
	<link rel="stylesheet" type="text/css" href="style2.css">
 <div id="fondation">
<div class="fondation">
<h1>Nye forums</h1>
<div>
	<form class="forum" action="forums.php" method="POST">
		 <input type="text" name="navn" placeholder="1 or up"><br>
        <input type="text" name="content" placeholder="Skive hvad du synes.">
        <br>
        <button type="submit" name="submit">Send</button>
	</form>
	
</div>

<div id="grid">
	<div>
	</div>
<div class="coloner">
	<?php 
	$sql = "SELECT bruger.fuldeNavn, forum.newTime, forum.content FROM forum INNER JOIN bruger ON forum.profilId=bruger.id ORDER BY newTime DESC;";
	$Mysql = "SELECT bruger.fuldeNavn, comment.newTime, comment.content FROM comment INNER JOIN bruger ON comment.profilId=bruger.id ORDER BY newTime DESC;";
	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $Mysql);
	$resultCheck = mysqli_num_rows($result);
	$resultCheck2 = mysqli_num_rows($result2);
	if ($resultCheck AND $resultCheck2 > 0) {
	//if ($resultCheck2 > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div>" . "<h2>" . $row['fuldeNavn'] . "</h2>" . "<br>" . "<h4>" . $row['newTime'] . "</h4>" . "<p>" . $row['content'] . "</p>". "<br>". "</div>" ;
			while ($row = mysqli_fetch_array($result2)) {
			echo "<div>" . "<h3>" . 'Comments' . "</h3>" . "<h3>" . $row['fuldeNavn'] . "</h3>" . "<h4>" . $row['newTime'] . "</h4>" . "<p>" . $row['content'] . "</p>". "<br>". "</div>" ;
}
			echo  "<br>" . "<div>" . "<form class='comment' action='comments.php' method='POST'>" . "<input type='text' name='Sender' placeholder='1 or up'>". "<br>" . "<input type='text' name='forum' placeholder='1 og op efter.'>" ."<input type='text' name='Content' placeholder='Skive hvad du synes.'>" . "<br>" . "<button type='submit' name='submit'>Send</button>" . "</form>" . "</div>";

	}
	}
/*		$sql = "SELECT bruger.fuldNavn, comment.newTime, comment.content FROM comment INNER JOIN bruger ON comment.profilId=bruger.id ORDER BY newTime DESC;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo $row['fuldNavn'] . "<br>" . $row['newTime'] ."<br>" . $row['content'] . "<br>";
		}
	}
*/
?>
</div>

</div>
</div>
<?php include'footer.php'; ?>

</div>

</body>
</html>