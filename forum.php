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
	<!-- Her skriver vi hvilke inputs forumet skal have. -->
	<form class="forum" action="forums.php" method="POST">
		<div class="form-group">
		 <input type="text" name="navn" placeholder=" profil: 1 or up"><br>
		</div>
		<div class="form-group">
        <textarea class="content" type="text" name="content" placeholder="Skive hvad du synes."></textarea><br>
    </div>

        <button type="submit" name="submit">Send</button>
	</form>
	
</div>

<div id="grid">
	<div>
	</div>
<div class="coloner">
	<?php 
	/* 

Her laver jeg den der select hvad der skal være i forumet som f.eks. navnet på personen der har lavet det, content på hvad han har lyst til at sige og tiden på hvornår den blive lavet.
 */
	$sql = "SELECT bruger.fuldeNavn, forum.newTime, forum.content, forum.billede FROM forum INNER JOIN bruger ON forum.profilId=bruger.id ORDER BY newTime DESC;";

	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			/* Her gør jeg at du kan trykke på navnet på person commer du ind på comments for at holde forums comments fra hinanden  */
			echo "<div>" . "<h2>" . "<a href='comment.php'>" . $row['fuldeNavn']. "</a>" . "</h2>" . "<br>" . "<h4>" . $row['newTime'] . "</h4>" . "<p>" . $row['content'] . "</p>". "<br>". "</div>" . "<br>" . "<br>";
}

	
	}

?>
</div>

</div>
</div>
<?php include'footer.php'; ?>

</div>

</body>
</html>