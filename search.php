<html>
<head>
<style>table , th, td {
border: 1px solid black;
}</style>
<title>Page1</title>
</head>
<body>
<h1>registred</h1>
<br>
<form action="search.php" method="post">
<input type ="text" name="id" class="search" placeholder ="search here">
<input type ="submit" name="submit" class="submit placeholder="search">
</form>
</body>
</html>

<?php
include_once'connection.php';
if(isset($_POST['id']))
{
	$search = $_POST['id'];
	$sql ="SELECT * FROM info where name LIKE '%$search%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo'<table><tr><td><b>Name</b></td><td><b>email</b></td></tr>';
while($row = mysqli_fetch_assoc($result)) {
echo'<tr><td>'.$row["name"].'</td><td>'.$row["email"]'</td></tr>';
}
echo'</table>';
}
else
{
echo"<br>0 results";
}
}
?>
