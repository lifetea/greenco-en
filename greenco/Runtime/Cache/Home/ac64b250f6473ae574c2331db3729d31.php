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
						            <li>
				            			<a rel="nofollow" href="about_us.php"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></a>
			            			</li>
						            <li>
						            	<a rel="nofollow" href="Certification.php"><?php echo (L("HEADER_CERTIFICATION")); ?></a>
					            	</li>
						            <li>
						            	<a rel="nofollow" href="Honour.php"><?php echo (L("HEADER_HONOUR")); ?></a>
					            	</li>
						            <!-- 
						            <li><a rel="nofollow" href="History.php"><?php echo _('History')?></a></li>
						             -->
						            <li><a rel="nofollow" href="Video.php"><?php echo (L("HEADER_VIDEO")); ?></a></li>
						            <li><a rel="nofollow" href="Equipments.php"><?php echo (L("HEADER_EQUIPMENTS")); ?></a></li>
						    </ul>
						  </li>
						  
						  
						  <li class="dropdown">
						    <a href="Side_Channel_Blower_2RB_Single_Stage.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						    		<?php echo (L("HEADER_PRODUCTS")); ?>
						    		<span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu" role="menu">
						            <li>
						            	<a href="Side_Channel_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE")); ?></a>
					            	</li>
						            <li>
						            	<a href="Side_Channel_Blower_2RB_Double_Stage.php"><?php echo (L("HEADER_2RB_DOUBLE")); ?></a>
					            	</li>
									<li class="divider">
									<li>
										<img style="float: right;" src="image/new.gif">
										<a href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo (L("HEADER_3RB_SINGLE")); ?></a>
									  </li>
									<li>
										<img style="float: right;" src="image/new.gif">
										<a href="Side_Channel_Blower_3RB_Double_Stage.php"><?php echo (L("HEADER_3RB_DOUBLE")); ?></a>
									</li>
									<li>
									 	<img class="pull-right" src="image/new.gif">
										<a href="Side_Channel_Blower_3RB_Three_Stage.php"><?php echo (L("HEADER_3RB_THREE")); ?></a>
									</li>
									<li class="divider">                  
						            <li><a href="Side_Channel_Blower_4RB_Single_Stage.php"><?php echo (L("HEADER_4RB_SINGLE")); ?></a></li>
						            <li><a href="Side_Channel_Blower_4RB_Double_Stage.php"><?php echo (L("HEADER_4RB_DOUBLE")); ?></a></li>
						            <li><a href="Side_Channel_Blower_4RB_Three_Stage.php"><?php echo (L("HEADER_4RB_THREE")); ?></a></li>
						            <li><a href="Belt_Drive_Air_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a></li>
						            <li class="divider">
						            <li><a href="Belt_Drive_Air_Blower_2RB_Double_Stage.php"><?php echo (L("HEADER_2RB_DOUBLE_BELT")); ?></a></li>
						            <li><a href="IE2_Single_Stage_Regenerative_Blower.php"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a></li>
						            <li><a href="IE2_Double_Stage_Regenerative_Blower.php"><?php echo (L("HEADER_2RB_DOUBLE_REGENERATIVE")); ?></a></li>
						            <li><a href="Cover_Suction_Ring_Blower.php"><?php echo (L("HEADER_COVER_SUCTION")); ?></a></li>
						            <li class="divider">
						            <li><a href="Silencer.php"><?php echo (L("HEADER_SILENCER")); ?></a></li>
						            <li><a href="Relief_Valve.php"><?php echo (L("HEADER_RELIEF_VALUE")); ?></a></li>
						            <li><a href="Inlet_Vacuum_Filter.php"><?php echo (L("HEADER_FILTER")); ?></a></li>
						        </ul>
						      </li>        
						 <li>
						        <a href="application.php"><?php echo (L("HEADER_APPLICATIONS")); ?></a>
						  </li>
						  
						 <li class="dropdown">
						    <a href="news_company.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						    		<?php echo (L("HEADER_NEWS_SUPPORT")); ?>
						    		<span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu" role="menu">
						            <li><a rel="nofollow" href="news_company.php"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
						            <li><a rel="nofollow" href="news_Industry.php"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
						            <li><a rel="nofollow" href="Support.php"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
					        </ul>
			      		</li>        
						<li>
						       <a rel="nofollow" href="Download.php"><?php echo (L("HEADER_DOWNLOADS")); ?></a>
						</li>
						<li>
						  <a rel="nofollow" href="Contact_us.php"><?php echo (L("HEADER_CONTACT_US")); ?></a>
						</li>
						<li>
							<a rel="nofollow" href="#"><?php echo (L("HEADER_JOIN_US")); ?></a>
						</li>
			 	  </ul>
				<form class="navbar-form navbar-right" role="search">
						<input type="text"  id="searchBox" name="term"  class="form-control" placeholder="<?php echo (L("HEADER_SEARCH")); ?>">
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
				<div class="container-fluid navbar-inverse" style="height:196px;">
	<div class="container" style=";">
		<div class="row">
		
			<ul class="col-xs-2 col-xs-offset-1">
				<li style="font-weight:600;list-style:none;color:#bbb;"><?php echo _('About Greenco')?></li>
				<li><a rel="nofollow" href="Certification.php"><?php echo _('Certification')?></a></li>
				<li><a rel="nofollow" href="Honour.php"><?php echo _('Honour')?></a></li>
				<li><a rel="nofollow" href="Video.php"><?php echo _('Video')?></a></li>
				<li><a rel="nofollow" href="Equipments.php"><?php echo _('Equipments')?></a></li>
			</ul>
			<ul class="col-xs-3">
				<li style="font-weight:600;list-style:none;color:#bbb;"><?php echo _('Products')?></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_2RB_Single_Stage.php"><?php echo _('2RB Series Side Channel Blower')?></a></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo _('3RB Series Side Channel Blower')?></a></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_4RB_Single_Stage.php"><?php echo _('4RB Series Side Channel Blower')?></a></li>
				<li><a rel="nofollow" href="IE2_Single_Stage_Regenerative_Blower.php"><?php echo _('IE2 Series Regenerative Blower')?></a></li>
				<li><a rel="nofollow" href="Belt_Drive_Air_Blower_2RB_Single_Stage.php"><?php echo _('Belt Drive Air Blower')?></a></li>
				<!-- 
				            <li><a rel="nofollow" href="Liquid_Ring_Vacuum_Pump_2LV7.php"><?php echo _('Liquid Ring Vacuum Pump')?></a></li>
				        	  -->
			</ul>
			<ul class="col-xs-2">
				<li style="font-weight:600;list-style:none;color:#bbb;"><?php echo _('Accessories')?></li>
				<li><a rel="nofollow" href="Silencer.php"><?php echo _('Silencer')?></a></li>
				<li><a rel="nofollow" href="Relief_Valve.php"><?php echo _('Relief Valve')?></a></li>
				<li><a rel="nofollow" href="Inlet_Vacuum_Filter.php"><?php echo _('Inlet Vacuum Filter')?></a></li>
			</ul>
			<ul class="col-xs-2">
		     	<li style="font-weight:600;list-style:none;color:#bbb;"><?php echo _('Downloads')?></li>
				<li><a rel="nofollow" href="upfile/side channel blower Complete Catalog.pdf"><?php echo _('Complete Catalog')?></a></li>
				<li><a rel="nofollow" href="upfile/Side channel blower Relief_Valve 2BX4.pdf"><?php echo _('Accessories')?></a></li>
				<li><a rel="nofollow" href="upfile/Liqudi Ring Vacuum Pump 2LV7 series.pdf"><?php echo _('Liquid Ring Vacuum Pump')?></a></li>
				<li><a rel="nofollow" href="javascript:;"><?php echo _('Electric Motor')?></a></li>
			</ul>
		  <ul class="col-xs-2">
		      <li style="font-weight:600;list-style:none;color:#bbb;"><?php echo _('News')?></li>
		      <li><a rel="nofollow" href="news_company.php"><?php echo _('Enterprise news')?></a></li>
		      <li><a rel="nofollow" href="news_Industry.php"><?php echo _('Industry news')?></a></li>
		      <li><a rel="nofollow" href="Support.php"><?php echo _('Support')?></a></li>
		<li><a rel="nofollow" href="sitemap.xml"><?php echo _('Sitemap')?></a></li>
		  </ul>
	      </div>
		<div>
	      <p class="col-xs-offset-1">
		   <span>©2002-2013 Copyright Greenco. All Rights Reserved 浙ICP备12000939号-1
		    
		    <script type="text/javascript">
				var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
				document.write(unescape("%3Cspan id='cnzz_stat_icon_1000346474'%3E%3C/span%3E%3Cscript src='" +
						 cnzz_protocol + "s5.cnzz.com/z_stat.php%3Fid%3D1000346474' type='text/javascript'%3E%3C/script%3E"));
		    </script>
		   </span>
	      </p>
		</div>	
	</div>
</div>
<!-- 搴曢儴鐗堟潈end -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

				<script src="<?php echo (C("JS_ROOT")); ?>/swfobject.js"></script>
				<script src="<?php echo (C("JS_ROOT")); ?>/index.js"></script>
		</body>
</html>