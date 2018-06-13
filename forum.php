<?php 

include 'navbar.php';
include 'DBh.php';

?>


<body>
	<link rel="stylesheet" type="text/css" href="style2.css">
 <div id="fondation">
<div class="fondation">
<h1>Nye forums</h1>
<div id="layout">
	<div>
	</div>
<div class="coloner">
	<?php 
	$sql = "SELECT bruger.fuldNavn, forum.newTime, forum.content FROM forum INNER JOIN bruger ON forum.profilId=bruger.id ORDER BY newTime DESC;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div>" . $row['fuldNavn'] . "<br>" . $row['newTime'] ."<br>" . $row['content'] . "<br>" ."</div>";
		}
	}
		$sql = "SELECT bruger.fuldNavn, comment.newTime, comment.content FROM comment INNER JOIN bruger ON comment.profilId=bruger.id ORDER BY newTime DESC;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo $row['fuldNavn'] . "<br>" . $row['newTime'] ."<br>" . $row['content'] . "<br>";
		}
	}



?>
</div>

</div>
</div>
<?php include'footer.php'; ?>

</div>

</body>