<?php
include_once 'connection.php';
?>
<?php
if(isset ($_POST['name'])&&($_POST['email']))
{
$name =$_POST['name'];
$email =$_POST['email'];
$query ="INSERT INTO info VALUES(1, '$name', '$email')";
$data = mysqli_query($conn ,$query);
if($data)
{
echo "success";
header("Location: search.php");
}
else
{
echo "failed";
}
}
else
{
include_once 'index.html';
}
?>