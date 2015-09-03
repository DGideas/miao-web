<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="题文正文" ?>
		<?php require_once('header.php'); ?>
	</head>
	<body>
		<div class="container">
			<?php include_once("banner.php"); ?>	
				<center><div class="col-md-12 col-xs-12">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">题目</h3>
				  </div>
				  <div class="panel-body">
					<?php include_once('DGStorage.php');
					$a=new DGStorage();
					$a->select('/var/lib/miao/knowledgebase');
					$res=$a->uid($_GET["uid"]);
					print(str_replace("width=650","",$res["prop"]["body"]));
					?>
				  </div>
				  <div class="panel-footer">
					<?php
						print('<p>难度：'.$res["prop"]["diff"].'</p>');
						print('<p>题目编号：'.$res["uid"].'</p>');
					?>
				  </div>
				</div>
				</div></center>
			<?php include_once("footer.php"); ?>
		</div>
	</body>
</html>
