<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="基地大厅" ?>
		<?php require_once('header.php'); ?>
		<?php
			if(isset($_GET["page"])){
				if($_GET["page"]<=0){$_GET["page"]=1;}
			}else{$_GET["page"]=1;}
		?>
	</head>
	<body>
		<div class="container">
			<?php include_once("banner.php"); ?>
			<?php
				include_once('DGStorage.php');
				$a=new DGStorage();
				$a->select('/var/lib/miao/knowledgebase');
				$res=$a->fetch(20,($_GET["page"]-1)*20);
				foreach($res as &$ex)
				{
					if($ex["prop"]["diff"]=='偏易')
					{
						print('<div class="panel panel-info">');
					}
					elseif($ex["prop"]["diff"]=='中档')
					{
						print('<div class="panel panel-warning">');
					}
					else
					{
						print('<div class="panel panel-danger">');
					}
					print('  <div class="panel-heading">');
					print('    <h3 class="panel-title">'.$ex["prop"]["kbname"].'</h3>');
					print('  </div>');
					print('  <div class="panel-body">');
					print(str_replace('>','》',str_replace('<','《',$ex["prop"]["content"])));
					print('  </div>');
					print('</div>');
				}
			?>
			<?php include_once("footer.php"); ?>
		</div>
	</body>
</html>
