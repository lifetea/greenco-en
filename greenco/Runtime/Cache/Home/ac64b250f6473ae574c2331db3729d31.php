<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
		<head>
				<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
				<?php require 'setLan.php';?>
				<title><?php echo (L("INDEX_TITLE")); ?></title>
				<meta name="keywords" content="<?php echo (L("INDEX_KEYWORDS")); ?>" />
				<meta name="description" content="<?php echo (L("INDEX_DESCRIPTION")); ?>" />
				<?php require 'inc/css.inc';?>
				<link href="favicon.ico" rel="shortcut icon"/>
		</head>
		<body >
				<div class="container header row" >
	<div class="col-xs-4">
		<a rel="nofollow" href="index.php">
			<img src="<?php echo (L("SRC_LAN")); ?>/logo.jpg" wmode="transparent" width="330" height="92" style="margin-top:10px;"/>
		</a>
	</div>
	<div class="col-xs-4 trademark">
		<img src="<?php echo (L("SRC_LAN")); ?>/home7.png"/>
	</div>
	<div class="col-xs-4">
		<div class="row">
			<div class="lang-select pull-right">
			   <a href="<?php echo (C("ZH_URL")); ?>"  target="_blank" ><img src="<?php echo (C("IMG_ROOT")); ?>/china.png" class="language_china" title="中文" alt="中文"/></a>
			   <a href="<?php echo (C("EN_URL")); ?>"  rel='nofollow' ><img src="<?php echo (C("IMG_ROOT")); ?>/english.png" class="language_english" title="English" alt="英文"/></a>
			   <a href="<?php echo (C("ES_URL")); ?>"  target="_blank" ><img src="<?php echo (C("IMG_ROOT")); ?>/spanish.png" class="language_english" title="Spanish" alt="西班牙"/></a>
			</div>
		</div>
		<div class="row">
			<div class="lang-select pull-right">
				<img src="<?php echo (C("IMG_ROOT")); ?>/home6.png"/>
			</div>
		</div>		
	</div>
</div>
<nav class="navbar-inverse container-fluid">
		<div class="container">
		  <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
								<li>
										<a rel="nofollow"  href="index.php"><?php echo (L("HEADER_HOME")); ?></a>
								</li>
						  <li class="dropdown">
						    <a href="about_us.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						    		<?php echo (L("HEADER_ABOUT_US")); ?> 
						    		<span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu" role="menu">
						            <li><a rel="nofollow" href="about_us.php"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></a></li>
						            <li><a rel="nofollow" href="Certification.php"><?php echo _('Certification')?></a></li>
						            <li><a rel="nofollow" href="Honour.php"><?php echo _('Honour')?></a></li>
						            <!-- 
						            <li><a rel="nofollow" href="History.php"><?php echo _('History')?></a></li>
						             -->
						            <li><a rel="nofollow" href="Video.php"><?php echo _('Video')?></a></li>
						            <li><a rel="nofollow" href="Equipments.php"><?php echo _('Equipments')?></a></li>
						    </ul>
						  </li>
						  
						  
						  <li class="dropdown">
						    <a href="Side_Channel_Blower_2RB_Single_Stage.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						    		<?php echo _('Products')?>
						    		<span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu" role="menu">
						            <li><a href="Side_Channel_Blower_2RB_Single_Stage.php"><?php echo _('2RB Single Stage Side Channel Blower')?></a></li>
						            <li><a href="Side_Channel_Blower_2RB_Double_Stage.php"><?php echo _('2RB Double Stage Side Channel Blower')?></a></li>
						<li class="divider">
						<li>
							<img style="float: right;" src="image/new.gif">
							<a href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo _('3RB Single Stage Side Channel Blower')?></a>
						  </li>
						<li>
							<img style="float: right;" src="image/new.gif">
							<a href="Side_Channel_Blower_3RB_Double_Stage.php"><?php echo _('3RB Double Stage Side Channel Blower')?></a>
						</li>
						<li>
							 	<img class="pull-right" src="image/new.gif">
								<a href="Side_Channel_Blower_3RB_Three_Stage.php"><?php echo _('3RB Three Stage Side Channel Blower')?></a>

						</li>
						<li class="divider">                  
						            <li><a href="Side_Channel_Blower_4RB_Single_Stage.php"><?php echo _('4RB Single Stage Side Channel Blower')?></a></li>
						            <li><a href="Side_Channel_Blower_4RB_Double_Stage.php"><?php echo _('4RB Double Stage Side Channel Blower')?></a></li>
						            <li><a href="Side_Channel_Blower_4RB_Three_Stage.php"><?php echo _('4RB Three Stage Side Channel Blower')?></a></li>
						            <li><a href="Belt_Drive_Air_Blower_2RB_Single_Stage.php"><?php echo _('2RB Single Stage Belt Drive Air Blower')?></a></li>
						            <li class="divider">
						            <li><a href="Belt_Drive_Air_Blower_2RB_Double_Stage.php"><?php echo _('2RB Double Stage Belt Drive Air Blower')?></a></li>
						            <li><a href="IE2_Single_Stage_Regenerative_Blower.php"><?php echo _('IE2 Single Stage Regenerative Blower')?></a></li>
						            <li><a href="IE2_Double_Stage_Regenerative_Blower.php"><?php echo _('IE2 Double Stage Regenerative Blower')?></a></li>
						            <li><a href="Cover_Suction_Ring_Blower.php"><?php echo _('Cover Suction Ring Blower')?></a></li>
						            <li><a href="Silencer.php"><?php echo _('Silencer')?></a></li>
						            <li><a href="Relief_Valve.php"><?php echo _('Relief Valve')?></a></li>
						            <li><a href="Inlet_Vacuum_Filter.php"><?php echo _('Inlet Vacuum Filter')?></a></li>
						        </ul>
						      </li>        
						 <li>
						        <a href="application.php"><?php echo _('Applications')?></a>
						  </li>
						  
						 <li class="dropdown">
						    <a href="news_company.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						    		<?php echo _('News & Information')?>
						    		<span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu" role="menu">
						            <li><a rel="nofollow" href="news_company.php"><?php echo _('Company news')?></a></li>
						            <li><a rel="nofollow" href="news_Industry.php"><?php echo _('Industry news')?></a></li>
						        </ul>
						      </li>        
						<li>
						        <a rel="nofollow" href="Download.php"><?php echo _('Downloads')?></a>
						  </li>
						  <li>
						    <a rel="nofollow" href="Support.php"><?php echo _('Support')?></a>
						  </li>
						  <li>
						    <a rel="nofollow" href="Contact_us.php"><?php echo _('Contact us')?></a>
						    </li>
						    <li>
						    <a rel="nofollow" href="Contact_us.php">人才招聘</a>
						    </li>
						   </ul>
						<form class="navbar-form navbar-right" role="search">
								<input type="text"  id="searchBox" name="term"  class="form-control" placeholder="<?php echo _('Start Searching')?> ...">
								<button type="submit" class="btn btn-success btn-search"><span class="glyphicon glyphicon-search"></span></button>
						</form>
				 </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
</nav>

				<div class="container">
				  <div class="flash-wrap">
				       <div id="cu3erSwf"></div>
				  </div>
				   <div id="sildeContainer">
				   		<img class="flash-shadow" src="<?php echo (C("IMG_ROOT")); ?>/bg_shadow.png"/>
				   		<div id="sliderWrap">
							<a class="slider-item first" href="about_us.php" >
								<img src="<?php echo (L("SRC_LAN")); ?>/home2.jpg"/>
							</a>
							<a class="slider-item second" href="Side_Channel_Blower_3RB_Single_Stage.php" >
								<img src="<?php echo (L("SRC_LAN")); ?>/home4.jpg" />
							</a>
							<a class="slider-item last"  href="Download.php">
								<img src="<?php echo (L("SRC_LAN")); ?>/home3.jpg" />
							</a>
							<a id="prev" href="javascript:void(0)">
								<img src="<?php echo (C("IMG_ROOT")); ?>/prev.jpg" />
							</a>
							<a id="next" href="javascript:void(0)">
								<img src="<?php echo (C("IMG_ROOT")); ?>/next.jpg" />
							</a>
						</div>
				   </div>
				</div>
				<input id="swfConfig" type="hidden"  value="<?php echo (L("SRC_LAN")); ?>/config.xml">
				<?php require 'inc/footer_inc.php';?>
				<script src="<?php echo (C("JS_ROOT")); ?>/swfobject.js"></script>
				<script src="<?php echo (C("JS_ROOT")); ?>/index.js"></script>
		</body>
</html>