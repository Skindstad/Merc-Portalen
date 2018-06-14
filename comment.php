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
<h1>Forums</h1>
<?php
/* 
Her laves en select, der viser hvad der skal være i forumet og navnet på personen der har lavet det, samt content på hvad han har skrevet og hvornår kommantaren er oprettet.
 */
$sql = "SELECT bruger.fuldeNavn, forum.newTime, forum.content, forum.billede FROM forum INNER JOIN bruger ON forum.profilId=bruger.id WHERE forum.id = '2' ORDER BY newTime DESC;";

	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div>" . "<h2>" . $row['fuldeNavn']. "</h2>" . "<br>" . "<h4>" . $row['newTime'] . "</h4>" . "<p>" . $row['content'] . "</p>". "<br>". "</div>" ;
}}

 ?>

<div>
	<!-- Her definere vi hvilke inputs comments skal have. -->
	<?php 



	echo "<form class='forum' method='POST' action='comments.php'>
		<div class='form-group'>
		 <input type='text' name='Sender' placeholder=' profil: 1 or up'>
        <textarea class='Content' type='text' name='Content' placeholder='Skive hvad du synes.'></textarea><br>
    </div>
        <button type='submit' name='submit'>Send</button>
	</form>";

/* 
Her laver vi en select, der viser hvad der skal være i comments og tiden på hvornår kommantaren blev oprettet.
 */
	$sql = "SELECT comment.content, comment.newTime  FROM comment INNER JOIN forum ON comment.forumId=forum.ID ORDER BY newTime DESC ;";
	$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div>" . "<h2>" . 'Anonymous' . "</h2>" . "<br>" . "<h4>" . $row['newTime'] . "</h4>" . "<p>" . $row['content'] . "</p>". "<br>". "</div>" ;
}}

	?>
</div>
	</div>
</div>
</div>
</div>
<?php include'footer.php'; ?>

</div>

</body>
</html>