﻿<?php
//让这个常量存在就能调用
define('feifa',ture);
//引入公共文件
require 'inc/common.php';
$_result=mysql_query("select  type,MPag,A,B,C,D,E,F,G from Relief where  type like '%{$_GET['type']}%' ");
$_rows=mysql_fetch_array($_result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>Relief Valve <?php echo  $_GET['type'];?> Technical Data</title>
<meta name="description" content="<?php echo  $_GET['type'];?> relief valve is used to adjust the pressure of <?php  IF($_GET['type']=='RV-01'){echo  'side channel blower';}elseif($_GET['type']=='RV-02'){echo  'Ring blower';}elseif($_GET['type']=='2BX4 141'){echo  'Air blower';}elseif($_GET['type']=='2BX4 142'){echo  'Regenerative Blower';}elseif($_GET['type']=='2BX4 143'){echo  'vacuum pump';}elseif($_GET['type']=='2BX4 144'){echo  'vortex blower';}elseif($_GET['type']=='2BX4 145'){echo  'vacuum compressor';}?>,it is installed on inlet or outlet of <?php  IF($_GET['type']=='RV-01'){echo  'side channel blower';}elseif($_GET['type']=='RV-02'){echo  'Ring blower';}elseif($_GET['type']=='2BX4 141'){echo  'Air blower';}elseif($_GET['type']=='2BX4 142'){echo  'Regenerative Blower';}elseif($_GET['type']=='2BX4 143'){echo  'vacuum pump';}elseif($_GET['type']=='2BX4 144'){echo  'vortex blower';}elseif($_GET['type']=='2BX4 145'){echo  'vacuum compressor';}?>,in order to protect the blower,the overload pressure will be released from relief valve." />
<meta name="keywords" content="<?php echo  $_GET['type'];?> relief valve,safety valve,security valve,pressure-relieving valve,vacuum relief valve,reducing valve for Ring blower,Air blower,Regenerative Blower" />
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<script src="js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<link href="favicon.ico" rel="shortcut icon" />
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize:     "drag",
    handleUnsupported:  "remove",
    autoplayMovies:     false
});
</script>
<!-- 无刷新分页 -->
<script src="js/jquery.quickpaginate.js" type="text/javascript" ></script>
<script type="text/javascript">
	$(function(){
		$(".mypagination").quickpaginate({
			perpage: 15,//每页显示条数,
			pager : $("#page_text") //div的ID
		})

	    $('table tr.content ').hover(//表格单行经过
			  function(){
               $(this).css('background','#ddd').css('color','#333').css('cursor','pointer');
	         },
			  function(){
	               $(this).css('background','#fff').css('color','#333');
		         }

	   )
	})
</script>
<style>
  	.info-nav li a{margin-left:5px;color:#333;}
  	.info-nav li a:hover{margin-left:5px;}
	ul.main-nav li{margin-left:12px;}
	ul.main-nav li a{font-size:13px;}
  	ul.main-nav li a:hover{background:#555;}
  	h1,h2,h3,h4,h5,h6{font-weight:600;}
  	.dropdown{border:1px solid #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage_all{background:#ccc;}
  	#Side_Channel_Blower_2RB_Single_Stage{height:1200px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{height:890px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 100px 15px;position:relative;}
  	#Side_Channel_Blower_2RB_Single_Stage .right img{border:1px solid #bbb;margin-top:10px;}
	#Side_Channel_Blower_2RB_Single_Stage .right img:hover{border:1px solid #666;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{clear:both;text-indent:8px;background:#666;height:30px;line-height:30px;color:#eee;border:1px solid #666;font-size:14px;font-family:arial;}
	#Side_Channel_Blower_2RB_Single_Stage .right #right{float:left;margin-bottom:20px;}
    #Side_Channel_Blower_2RB_Single_Stage .right #right img{margin:54px 0 0 27px;border:1px solid #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage .right #left h4{border-bottom:1px dashed #ccc;color:#1850a3;font-size:19px;font-family:TAHOMA;height:50px;line-height:50px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right #left{float:left;margin-top:5px;width:370px;margin-bottom:20px;}
  	table{background:#fff;font-size:11px;font-family:Microsoft YaHei;color:#444;border:none;margin-top:10px;}
    tr {height:35px;line-height:35px;}
  	tr span{color:#1c59b7;}
  	table.data{border-top:1px solid #999;border-right:1px solid #999;color:#e9ba3f;width:500px;}
  	table.data td{text-align:center;padding:3px;height:20px;line-height:20px;color:#333;border:1px solid #999;border-top:0px;border-right:0px;}
    table.data span{vertical-align:bottom;font-size:10px;color:#333;}
  	table.data tr.one{background:url(image/table_bg.png) ;font-size:12px;}

    table.data tr.one td{font-weight:600;color:#333;}
    #copyright a{color:#999;font-variant:normal;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>


<!-- 应用内容 -->
<div id="Side_Channel_Blower_2RB_Single_Stage_all" >
   <div id="Side_Channel_Blower_2RB_Single_Stage">
       <img src="image/product_banner.png" style="margin:10px 0 0 10px;"/>
       <?php require 'inc/prod-left.php';?>
       <div class="right">
             <div id="left">
                <h4>Relief Valve <?php echo $_GET['type'];?> Technical Data</h4>
                <table style="font-size:12px;">
                   <tr><td><strong>Model: </strong><span><?php echo $_GET['type'];?></span></td><td>
                </table>
                <?php if($_GET['type']=='RV-01' or $_GET['type']=='RV-02'){
                	echo '<h5 style="background:#fff url(image/download1.png) no-repeat ;color:#333;border:none;line-height:45px;text-indent:36px;margin-top:180px;font-size:14px;"><a href="upfile/side channel blower Relief Valve RV.pdf" target="_blank" style="color:#1850a3;">Download PDF Relief Valve '.$_GET['type'].' (569 KB)</a></h5>';
                }else{
                	echo '<h5 style="background:#fff url(image/download1.png) no-repeat ;color:#333;border:none;line-height:45px;text-indent:36px;margin-top:180px;font-size:14px;"><a href="upfile/Side channel blower Relief_Valve 2BX4.pdf" target="_blank" style="color:#1850a3;">Download PDF Relief Valve '.$_GET['type'].' (404 KB)</a></h5>';
                }
                ?>
             </div>
             <div id="right">
              <?php if($_GET['type']=='RV-01' or $_GET['type']=='RV-02'){
                    echo '<img src="product_image/product_content_big/Relief_Valve_RV.jpg" alt="side channel blower '.$_GET['type'].' image and picture"/>';
              }elseif($_GET['type']=='2BX4 141'){
                    echo '<img src="product_image/product_content_big/Relief_Valve_2BX4_141.jpg" alt="side channel blower '.$_GET['type'].' image and picture"/>';
              }elseif($_GET['type']=='2BX4 142'){
                    echo '<img src="product_image/product_content_big/Relief_Valve_2BX4_142.jpg" alt="side channel blower '.$_GET['type'].' image and picture"/>';
              }elseif($_GET['type']=='2BX4 143'){
                    echo '<img src="product_image/product_content_big/Relief_Valve_2BX4_143.jpg" alt="side channel blower '.$_GET['type'].' image and picture"/>';
              }elseif($_GET['type']=='2BX4 144'){
                    echo '<img src="product_image/product_content_big/Relief_Valve_2BX4_144.jpg" alt="side channel blower '.$_GET['type'].' image and picture"/>';
              }elseif($_GET['type']=='2BX4 145'){
                    echo '<img src="product_image/product_content_big/Relief_Valve_2BX4_145.jpg" alt="side channel blower '.$_GET['type'].' image and picture"/>';
              }
              ?>
             </div>


             <h5>Dimension for Relief Valve <?php echo $_GET['type'];?></h5>
             <!-- 尺寸图判断 -->
             <?php
             if($_GET['type']=='RV-01' or $_GET['type']=='RV-02'){
                    echo   '<a rel="shadowbox" href="product_image/Dimensions_Relief_Valve/Relief_valve_RV_big.jpg"><img alt="Dimension for Silencer '.$_rows['type'].' " class="border" src="product_image/Dimensions_Relief_valve/Relief_valve_RV_small.jpg"  title="Click to Enlarge"/></a>';
             }else{
                    echo   '<a rel="shadowbox" href="product_image/Dimensions_Relief_Valve/Relief_valve_2BX4_big.jpg"><img alt="Dimension for Silencer '.$_rows['type'].' " class="border" src="product_image/Dimensions_Relief_valve/Relief_valve_2BX4_small.jpg"  title="Click to Enlarge"/></a>';
             }

             ?>

             <!-- 技术参数判断 -->
             <?php
                if($_GET['type']=='RV-01' or $_GET['type']=='RV-02'){
				        echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
						'<tr class="one"><td>Model</td><td>MPaG</td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td></tr>'.
						'<tr class="two"><td>'.$_rows['type'].'</td><td>'.$_rows['MPag'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td></tr>'.
						'</table>';
               }else{
				       echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
						'<tr class="one"><td>Model</td><td>A</td><td>ϕB</td><td>C</td><td>D</td><td>E</td></tr>'.
						'<tr class="two"><td>'.$_rows['type'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td></tr>'.
						'</table>';
               }

               ?>
             <p style="position: absolute;bottom:20px;left:20px;">Note:Model offerings and design parameters may change without notice.</p>
       </div>
   </div>
</div>
<!-- 应用内容end -->

<?php require 'inc/footer_inc.php';?>


<script src="js/swfobject.js"></script>
<script  type="text/javascript" src="layer/layer.js"></script>
<script  src="js/application.js"></script>
<script>
$(function(){
    $(" div.dropdown ul li a").css('color','#444');

	$("ul.main-nav li a").hover(
	 function(){
	        $(this).css('background','#666');
	 },
	 	 function(){
	        $(this).css('background','#333');
	 }
	 );

	 $(" div.dropdown ul li a").hover(
	 function(){
	        $(this).css('background','#fff').css('text-decoration','underline').css('color','#222');
	 },
	 	 function(){
	        $(this).css('background','#fff').css('text-decoration','none').css('color','#444');
	 }
	 )
})

</script>
</body>
</html>

