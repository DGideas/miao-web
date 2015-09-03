<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="基地大厅" ?>
		<?php require_once('header.php'); ?>
		<?php
			if(isset($_GET["page"])){
				if($_GET["page"]<=0){$page=1;}else{$page=$_GET["page"];}
			}else{$page=1;}
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
					print('<a href="http://121.42.141.42/miao/detail.php?uid='.$ex["uid"].'" >');
					print(str_replace('>','》',str_replace('<','《',$ex["prop"]["content"])).'..........');
					print('</a>');
					print('  </div>');
					print('</div>');
				}
			?>
				<center><nav>
 				 <ul class="pagination">
 				   <li <?php if($page<=1){print('class="disabled"');} ?>>
 				     <a href="http://121.42.141.42/miao/index.php?page=<?php print($page-1); ?>" aria-label="Previous">
 			 	      <span aria-hidden="true">&laquo;</span>
 				     </a>
 				   </li>
					<?php if($page>=6): ?><li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page-5); ?>"><?php endif; ?><?php if($page>=6){print($page-5);} ?><?php if($page>=6): ?></a></li><?php endif; ?>
					<?php if($page>=5): ?><li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page-4); ?>"><?php endif; ?><?php if($page>=5){print($page-4);} ?><?php if($page>=5): ?></a></li><?php endif; ?>
					<?php if($page>=4): ?><li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page-3); ?>"><?php endif; ?><?php if($page>=4){print($page-3);} ?><?php if($page>=4): ?></a></li><?php endif; ?>
 					<?php if($page>=3): ?><li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page-2); ?>"><?php endif; ?><?php if($page>=3){print($page-2);} ?><?php if($page>=3): ?></a></li><?php endif; ?>
  					<?php if($page>=2): ?><li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page-1); ?>"><?php endif; ?><?php if($page>=2){print($page-1);} ?><?php if($page>=2): ?></a></li><?php endif; ?>
  					<li class="active"><a href="http://121.42.141.42/miao/index.php?page=<?php print($page); ?>"><?php print($page); ?></a></li>
  					<li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page+1); ?>"><?php print($page+1); ?></a></li>
  					<li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page+2); ?>"><?php print($page+2); ?></a></li>
					<li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page+3); ?>"><?php print($page+3); ?></a></li>
					<li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page+4); ?>"><?php print($page+4); ?></a></li>
					<li><a href="http://121.42.141.42/miao/index.php?page=<?php print($page+5); ?>"><?php print($page+5); ?></a></li>
  					<li>
  				    <a href="http://121.42.141.42/miao/index.php?page=<?php print($page+1); ?>" aria-label="Next">
  				      <span aria-hidden="true">&raquo;</span>
   				   </a>
  				  </li>
 				 </ul>
				</nav>
			</nav></center>
			<?php include_once("footer.php"); ?>
		</div>
	</body>
</html>
