<!--
Here, we write code for registration.
-->
<?php
$conn = mysqli_connect("localhost","root","","success");

if(!$conn)
{
	echo "Database connection faild...";
}
$nom = $prenom = $email = $telephone = '';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];


$sql = "INSERT INTO inscrit (nom,prenom,email,telephone) VALUES ('$nom','$prenom','$email','$telephone')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location:index.php");
}
else
{
	echo "Error :".$sql;
}
?>