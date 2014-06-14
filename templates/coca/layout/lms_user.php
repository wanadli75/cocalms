<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Layout::lang_code(); ?>">
	<head>
	    <!--Fix funzionamento scorm su IE9-->
        <meta http-equiv="x-ua-compatible" content="IE=8"></meta>
        <!--END -->

		<title><?php echo Layout::title(); ?></title>
		<?php echo Layout::zone('meta'); ?>
		<link rel="shortcut icon" href="<?php echo Layout::path(); ?>images/favicon.ico" />
		<!-- reset and font stylesheet -->
		<?php echo Layout::resetter(); ?>
		<!-- common stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo Layout::path(); ?>style/base.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Layout::path(); ?>style/lms.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Layout::path(); ?>style/lms-to-review.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Layout::path(); ?>style/lms-menu.css" />
		<!-- specific stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo Layout::path(); ?>bootstrap/css/bootstrap.min.css" />
		<!-- printer stylesheet-->
		<link rel="stylesheet" type="text/css" href="<?php echo Layout::path(); ?>style/print.css" media="print" />
		<?php echo Layout::accessibility(); ?>
		<!-- Page Head area -->
		<script type="text/javascript" src="<?php echo Get::rel_path('base'); ?>/lib/js_utils.js"></script>
		
		<script type="text/javascript" src="<?php echo Layout::path(); ?>bootstrap/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php echo Layout::path(); ?>bootstrap/js/bootstrap.min.js"></script>
		<?php echo Layout::zone('page_head'); ?>
		<?php echo Layout::rtl(); ?>
	</head>
	<body class="yui-skin-docebo yui-skin-sam">
		<!-- blind nav -->
		<?php echo Layout::zone('blind_navigation'); ?>
		<!-- feedback -->
		<?php echo Layout::zone('feedback'); ?>
		<!-- wrapper for sticky footer -->
		<div id="wrapper"> 
		<!-- container -->
		<div id="container">
		<!-- header -->
		<div id="header" class="layout_header">

			<?php if (!Docebo::user()->isAnonymous()): ?>
			<div class="dropdown pull-right">
				  <a id="dLabel" class="dropdown-toggle" data-toggle="dropdown" href="#"><?php if (!Docebo::user()->isAnonymous()) echo Docebo::user()->getUserId(); ?> <b class="caret"></b></a>
				  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				    <li role="presentation"><a class="identity" href="index.php?r=profile/show"><span class="glyphicon glyphicon-user pull-right"></span> User Profile</a></li>
				    <li class="divider" role="presentation"></li>
				    <li role="presentation"><a class="logout" href="index.php?modname=login&amp;op=logout"><span class="glyphicon glyphicon-off pull-right"></span> Logout</a></li>
				  </ul>
			</div>
			<?php endif; ?>

			<div class="pull-right"><span><?php echo Layout::change_lang(); ?></span><b class="caret"></b></div>

			LOGO
			<!-- <img class="left_logo" src="<?php echo Layout::path(); ?>images/company_logo.png" alt="Left logo" /> -->
			
			<?php echo Layout::zone('header'); ?>
			<div class="nofloat"></div>

		</div>
		<!-- menu_over -->
		<div id="menu_over" class="layout_menu_over">
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Brand</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="navbar-collapse">
			      <?php echo Layout::cart(); ?>
			      <?php echo Layout::zone('menu_over'); ?>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<!-- content -->
		<div class="layout_colum_container">
			<?php echo Layout::zone('content'); ?>
			<div class="nofloat"></div>
		</div>

		</div>

		<div class="push"></div>
		</div>

		<!-- footer -->
		<div id="footer" class="layout_footer">
			<div class="container">
				<?php echo Layout::zone('footer'); ?>
				<?php echo Layout::copyright(); ?>
			</div>
		</div>

		<!-- scripts -->
		<?php echo Layout::zone('scripts'); ?>
		<!-- debug -->
		<?php echo Layout::zone('debug'); ?>
		<!-- def_lang -->
		<?php echo Layout::zone('def_lang'); ?>
		<?php echo Layout::analytics(); ?>
	</body>
</html>