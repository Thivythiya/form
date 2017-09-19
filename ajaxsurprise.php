<?php
$username = $_POST['username'];
$password = $_POST['pass'];

//To prevent the mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect with the server and select the database
mysql_connect("localhost","root","mysql");
mysql_select_db("form");

//Query
$result = mysql_query("select * from ajaxlogin where username = '$username' and password ='$password'") or die("failed to selec the query" . mysql_error());

$value = mysql_fetch_array($result);
if ($_POST['username'] == '' && $_POST['pass'] == ''){
	echo "<p style='color:red'>Please enter the username and password</p>
		<button onclick=home()>Home</button>";
}elseif ($value['Username'] == $username && $value['Password'] == $password){
	echo "<body style='background:url(str.jpg) no-repeat; background-size:cover'>
		<button onclick=home()>Home</button><br>
		<img style='padding-left:475px;padding-top:425px'src='congrats.gif'></body>";
}else{
 	echo "<p style='color:red'>Please enter the valid username and password</p>
		<button onclick=home()>Home</button>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	function home(){
		window.location = "ajaxlogin.html";
	}
</script>
</body>
</html>