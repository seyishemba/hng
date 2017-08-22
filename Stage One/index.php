<?php
//connect to the database
$conn = mysqli_connect("localhost","root", "", "hnginterns");
if (!$conn) {
    die ("<p>An error occured</p>");
}
?>
<h1>
	Hello World!
</h1>
<h4>
	Welcome to @iamseyiajayi's project for Hotels.ng
</h4>
<p>
	Today's Date is: <?=date('d M Y H:i:s A')?>
</p>

<p>
	My friends List:
</p>
<?php
	$query = mysqli_query($conn, "SELECT * FROM friends");
	while ($row = mysqli_fetch_assoc($query)) {
		echo "<li>" . $row['fullname'] . "</li>";
	}
?>