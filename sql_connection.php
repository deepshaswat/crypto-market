<?php
session_start();
	if(!isset($_SESSION['username']))
{
echo("<script>location.href = 'index.php';</script>");
exit;
}
$host = "crypto.deepshaswat.net";
$db_user = "dvithzri_madness";
$db_passwd = "Shainky_1";
$con = mysql_connect($host,$db_user,$db_passwd);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dvithzri_crypto");
?>