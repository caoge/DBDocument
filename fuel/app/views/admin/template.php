<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/css/bootstrap.min.css"> -->
	<?php echo Asset::css(array('bootstrap.min.css')); ?>
	<link rel="stylesheet" href="<?php echo Asset::get_file('artDialog-5.0.4/skins/black.css', 'js'); ?>">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    body {font-family: '微软雅黑';}
    </style>
  </head>
  <body>
	<header class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo Uri::base(); ?>">数据库文档生成系统<?php echo Config::get('current_version'); ?></a>
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li <?php if($nav == 'server') echo 'class="active"'; ?>>
						<a href="<?php echo Uri::create('admin/server'); ?>">服务器</a>
					</li>
					<li <?php if($nav == 'document') echo 'class="active"'; ?>>
						<a href="<?php echo Uri::create('admin/document'); ?>">文档</a>
					</li>
					<li <?php if($nav == 'log') echo 'class="active"'; ?>>
						<a href="<?php echo Uri::create('admin/log'); ?>">日志</a>
					</li>
					<li <?php if($nav == 'setting') echo 'class="active"'; ?>>
						<a href="<?php echo Uri::create('admin/setting'); ?>">设置</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> admin <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href=""><span class="glyphicon glyphicon-ok-sign"></span> 修改密码</a></li>
							<li class="divider"></li>
							<li><a href=""><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div id="main-container" class="container" style="margin-top: 70px;">
		<div class="row">
			<?php echo $content; ?>
		</div>
	</div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>-->
    <?php echo Asset::js(array('bootstrap.min.js', 'artDialog-5.0.4/jquery.artDialog.min.js', 'artDialog-5.0.4/artDialog.plugins.min.js', 'common.js')); ?>

  </body>
</html>