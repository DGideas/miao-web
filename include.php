<?php
	//header('location:http://121.42.141.42/miao/update.php');
	if (!isset($_COOKIE["token"])){
		header('location:http://121.42.141.42/miao/login.php');
	}else
	{
		require_once('DGStorage.php');
		$user=new DGStorage();
		$user->select('/var/lib/miao/user');
		$res=$user->get($_COOKIE["token"]);
		if(!isset($res[0]))
		{
			header('location:http://121.42.141.42/miao/login.php');
		}
	}
?>
