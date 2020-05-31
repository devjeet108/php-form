<?php
$servername = "mariadb108.mariadb.database.azure.com"
$username = "rootadmin@mariadb108"
$password = "jaimatadi@12"

$conn = mysqli_connect($servername, $username, $password, "students");

if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
echo"Connected succesfully";
?>