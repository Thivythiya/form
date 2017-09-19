<?php
$name2 = $_POST['name'];
$email2 = $_POST['email'];
$uname2 = $_POST['uname'];
$birth2 = $_POST['birth'];
$mbl2 = $_POST['mbl'];
$pass2 = $_POST['pass'];

$conn = mysql_connect("localhost","root","mysql");
mysql_select_db("form");
if($conn){
	$query = mysql_query("insert into ajaxlogin(Name,Email,Username,Date_of_birth,Mobile_number,Password) values ('$name2', '$email2', '$uname2', '$birth2', '$mbl2', '$pass2')");
	echo "<p style='color:darkgreen'>You created an account successfully.....</p>";
	echo "<button onclick='load();'>Home</button>";
}
mysql_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function load(){
			window.location = "ajaxlogin.html";
		}
	</script>
	<style type="text/css">
		body{
			background-image: url(bg1.jpg);
		}
	</style>
</head>
<body>

</body>
</html>