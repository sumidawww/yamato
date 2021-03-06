<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->
	<head>
		<title>大和キリスト教会　<?php echo $title; ?>　ギャラリー</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />  
        <link rel="shortcut icon" href="../favicon.ico" >
          
        <link rel="stylesheet" href="../css/font-awesome.min.css">
                
		<link rel="stylesheet" href="../supersized/slideshow/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../supersized/slideshow/theme/supersized.shutter.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="../supersized/slideshow/js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="../supersized/slideshow/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="../supersized/slideshow/theme/supersized.shutter.min.js"></script>
		

		<script type="text/javascript">
			jQuery(function($){
				$.supersized({
				autoplay:false,
              fit_always:true,
              new_window:false,
              thumb_links:true,
              thumbnail_navigation:true,
					// Functionality
					slide_interval          :   9000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
            <?php
            for($num=$start_sequential_num;$num<=$end_sequential_num;$num++){
              $images[] = "{image : '{$img_path}{$img_file_prefix}". sprintf('%02d',$num) .".{$img_file_postfix}', title : '$title', url : ''}";
            }
            echo join(',',$images);
            ?>
            										]
					
				});
		    });
		    
		</script>
	</head>
	
	<style type="text/css">
		ul#demo-block{
      margin:0 15px 15px 15px;
    }
			ul#demo-block li{
        margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#000; font:11px Helvetica, Arial, sans-serif;
            background-color:rgba(0, 0, 0, 0.1);
  background-position:initial initial;
  /*background-repeat:initial initial;*/

  /*z-index:10;*/
  
      border-radius: 3px;        /* CSS3草案 */  
    -webkit-border-radius: 3px;    /* Safari,Google Chrome用 */  
    -moz-border-radius: 3px;   /* Firefox用 */
    
  filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#0b000000,EndColorStr=#0b000000);
  /* for IE8 */
  position: relative;
  behavior: url("../ie/PIE-1.0.0/PIE.htc");
      }
			ul#demo-block li a{ color:#000; font-size:16px; text-decoration: none; }
      body{background-color: #FFFAE8 !important;}
      #supersized li{
        background-color: #FFFAE8 !important;
        pointer-events:none;  
        cursor:default;
      }
	</style>
<body>


				<ul id="demo-block">
		<li><a href="<?php echo $url?>"><i class="icon-rotate-left"></i> 記録のページに戻る</a></li>
	</ul>
	<!--End of styles-->

	<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src="./img/pause.png"/></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			<a id="tray-button"><img id="tray-arrow" src="./img/button-tray-up.png"/></a>
						<!--Navigation-->
			<ul id="slide-list"></ul>

		</div>
	</div>

</body>
</html>
