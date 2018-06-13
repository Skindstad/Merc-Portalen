<?php 

include 'navbar.php';
include 'DBh.php';

?>


<body>
	<link rel="stylesheet" type="text/css" href="style2.css">
 <div id="fondation">
<div class="fondation">
<h1>Nye forums</h1>
<div>
	<form class="forum" action="forums.php" method="POST">
		 <input type="text" name="navn" placeholder="1 or 2"><br>
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
	$sql = "SELECT bruger.fuldNavn, forum.newTime, forum.content FROM forum INNER JOIN bruger ON forum.profilId=bruger.id ORDER BY newTime DESC;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div>" . "<h2>" . $row['fuldNavn'] . "</h2>" . "<br>" . "<h4>" . $row['newTime'] . "</h4>" ."<br>" . "<p>" . $row['content'] . "</p>". "<br>". "</div>" . "<br>" . "<br>" . "<div>" . "<form class='forum' action='comments.php' method='POST'>" . "<input type='text' name='navn' placeholder='1 or 2'>" ."<input type='text' name='content' placeholder='Skive hvad du synes.''>" . "<br>" ."<button type='submit' name='submit'>Send</button>" . "</form>" . "</div>" ;
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