<html>
<head>
	<meta http-equiv="Location" content="http://crypto.deepshaswat.net/">
</head>
	<body>
<?php
		session_start();
			$host = "crypto.deepshaswat.net";
			$db_user = "dvithzri_madness";
			$db_passwd = "Shainky_1";
			$con = mysql_connect($host,$db_user,$db_passwd);
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("dvithzri_crypto");

$password=($_POST['password']);
$username=($_POST['username']);



$query=mysql_query("SELECT * FROM user where username='$username' AND password='$password'");

$row = mysql_fetch_array($query);
$count=mysql_num_rows($query);

if($count==1)
{
	$_SESSION['username']=$_POST['username'];
	if($row['role_id']==1)
	{
		echo("<script>location.href = 'admin_home.php';</script>");
	}
	else if($row['role_id']==2)
	{
	echo("<script>location.href = 'accountant_home.php';</script>");
	}
}

else
{
echo("<script>location.href = 'index.php';</script>");

}
?>
		

	</body>
</html>