<?php
if(isset($_POST["token"]))
{
$token=strtolower(hash("sha512",$_POST["token"]));
require_once('DGStorage.php');
$user=new DGStorage();
$user->select('/var/lib/miao/user');
$res=$user->get($token);
}
if($_GET["method"]=='logout')
{
var_dump($GLOBALS);
setcookie('token','');
setcookie('username','');
header('location:http://121.42.141.42/miao/index.php');
}
if(isset($res[0]))
{
setcookie('token',$token);
setcookie('username',$res[0]["content"]);
header('location:http://121.42.141.42/miao/index.php');
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="入口"; ?>
		<?php require_once('header.php'); ?>
	</head>
	<body style="background-color:#000">
			<?php include_once("banner.php"); ?>		
			<div class="container">
			<form action="login.php" method="post">
					<center>
						<p style="color:#fff">聪明的小淼，秘密基地欢迎你</p>
						<p />
						<input type="password" class="fbafields" name="token" placeholder="秘密基地钥匙" style="color: #777777;padding: 9px;border: 0px solid #000000;width: 259px;font-size: 87.5%;font-family: Segoe, 'Segoe UI', Helvetica, Arial, sansserif, 微软雅黑Light, 方正等线, 方正细等线, 黑体;background-repeat: no-repeat;"></input>
						<p />
						<input type="submit" value="验证" style="background-color: #008287;color: #fff;font-family: 'Segoe UI Semibold', Arial, Verdana, Sans-Serif, 微软雅黑Light, 方正等线, 方正细等线, 黑体;border: 2px solid #fff;padding: 5px;text-align: center;width: 89px;height: 33px;"></input>
					</center>
				</form>	
			</div>
		<p />
		<?php include_once("footer.php"); ?>
	</body>
</html>
