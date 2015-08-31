			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
				  <span class="glyphicon glyphicon-home navbar-brand" aria-hidden="true"></span> 
			      <a class="navbar-brand" href="index.php">秘密基地</a>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a <?php //href="#" ?>><?php print($GLOBALS["title"]); ?><span class="sr-only">(current)</span></a></li>
			      </ul>
				<?php if(isset($_COOKIE["token"]) && $_COOKIE["token"]!=''): ?>
			      <form class="navbar-form navbar-right" role="search" action="#">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="题目或标识码">
			        </div>
			        <button type="submit" class="btn btn-default">搜索</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<?php if(isset($_COOKIE["username"])){print($_COOKIE["username"]);} ?>
						<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">指挥中心</a></li>
			            <li><a href="#">百宝箱</a></li>
			            <li><a href="#">控制台</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="login.php?method=logout">锁门</a></li>
			        </li>
			      </ul>
					<?php endif; ?>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
