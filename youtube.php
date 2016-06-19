<?php

/**
 * About: 
 *      This File is Written for <Project>
 * 
 * Developer/Author: Muhammad Nasir Khan
 * Email: nasir@mgcc.ae
 * 
 */

//http://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg
//http://img.youtube.com/vi/<insert-youtube-video-id-here>/1.jpg
//http://img.youtube.com/vi/<insert-youtube-video-id-here>/2.jpg
//http://img.youtube.com/vi/<insert-youtube-video-id-here>/3.jpg

//http://img.youtube.com/vi/<insert-youtube-video-id-here>/default.jpg

// For the high quality version of the thumbnail use a url similar to this:
// http://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg

// There is also a medium quality version of the thumbnail, using a url similar to the HQ:
// http://img.youtube.com/vi/<insert-youtube-video-id-here>/mqdefault.jpg

//For the standard definition version of the thumbnail, use a url similar to this:
//http://img.youtube.com/vi/<insert-youtube-video-id-here>/sddefault.jpg

//For the maximum resolution version of the thumbnail use a url similar to this:
// http://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg
    
$youtube_videos[] = array('title' => '[MGH] Al Marwan Group Holding ', 'id' => 'MbbD0naAMHU');
$youtube_videos[] = array('title' => 'Sharjah General Contracting Company', 'id' => 'liZdcnP7RCU');
$youtube_videos[] = array('title' => 'Al Marwan Heavy Equipment & Machinery Trading Est.', 'id' => '_KqSWTIbwy0');
$youtube_videos[] = array('title' => 'Al Marwan General Contracting Co.', 'id' => 'xHM347BO-ng');
$youtube_videos[] = array('title' => 'East and West Trading Est Video ', 'id' => 'RnT62gOutTI');


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
  	<meta name="viewport" content="width=470, maximum-scale=1, user-scalable=no, target-densitydpi=device-dpi">
  	<title>Responsive YouTube Player with Scrolling Thumbnail Playlist</title> 
        <link rel="stylesheet" href="font-awesome.min.css" />

  	<style type="text/css">

  		body {
  			margin: 30px;
  			padding: 0;
  			background: #ddd;
  			font-family: Arial, Helvetica, sans-serif;
  		}

  		.title {
  			width: 100%;
  			max-width: 854px;
  			margin: 0 auto;
  		}

  		.caption {
  			width: 100%;
  			max-width: 854px;
  			margin: 0 auto;
  			padding: 20px 0;
  		}

  		.container {
  			width: 100%;
  			max-width: 854px;
  			min-width: 440px;
  			background: #fff;
  			margin: 0 auto;
  		}


  		/*  VIDEO PLAYER CONTAINER
 		############################### */
  		.vid-container {
		    position: relative;
		    padding-bottom: 52%;
		    padding-top: 30px; 
		    height: 0; 
		}
		 
		.vid-container iframe,
		.vid-container object,
		.vid-container embed {
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		}


		/*  VIDEOS PLAYLIST 
 		############################### */
		.vid-list-container {
			width: 92%;
			overflow: hidden;
			margin-top: 20px;
			margin-left:4%;
			padding-bottom: 20px;
		}

		.vid-list {
			width: 1344px;
			position: relative;
			top:0;
			left: 0;
		}

		.vid-item {
			display: block;
			width: 148px;
			height: 148px;
			float: left;
			margin: 0;
			padding: 10px;
		}

		.thumb {
			/*position: relative;*/
			overflow:hidden;
			height: 84px;
		}

		.thumb img {
			width: 100%;
			position: relative;
			top: -13px;
		}

		.vid-item .desc {
			color: #21A1D2;
			font-size: 15px;
			margin-top:5px;
		}

		.vid-item:hover {
			background: #eee;
			cursor: pointer;
		}

		.arrows {
			position:relative;
			width: 100%;
		}

		.arrow-left {
			color: #fff;
			position: absolute;
			background: #777;
			padding: 15px;
			left: -25px;
			top: -130px;
			z-index: 99;
			cursor: pointer;
		}

		.arrow-right {
			color: #fff;
			position: absolute;
			background: #777;
			padding: 15px;
			right: -25px;
			top: -130px;
			z-index:100;
			cursor: pointer;
		}

		.arrow-left:hover {
			background: #CC181E;
		}

		.arrow-right:hover {
			background: #CC181E;
		}


		@media (max-width: 624px) {
			body {
				margin: 15px;
			}
			.caption {
				margin-top: 40px;
			}
			.vid-list-container {
				padding-bottom: 20px;
			}

			/* reposition left/right arrows */
			.arrows {
				position:relative;
				margin: 0 auto;
				width:96px;
			}
			.arrow-left {
				left: 0;
				top: -17px;
			}

			.arrow-right {
				right: 0;
				top: -17px;
			}
		}

  	</style>

  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


  </head>

  <body>
  	

  	<div class="container">
                    <?php 
                        $video_id = $youtube_videos[0]['id'];
                    ?>
  		<!-- THE YOUTUBE PLAYER -->
  		<div class="vid-container">		    
                    <iframe id="vid_frame" width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $video_id;?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>

		<!-- THE PLAYLIST -->
		<div class="vid-list-container">
                    <?php foreach ($youtube_videos as $video) { ?>
                    <div class="vid-list">
                    
 	            <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/<?php echo $video['id'];?>?autoplay=1&rel=0&showinfo=0&autohide=1'">
 	              <div class="thumb"><img src="http://img.youtube.com/vi/<?php echo $video['id'];?>/0.jpg"></div>
 	              <div class="desc"><?php echo $video['title'];?></div>
 	            </div>
	 	    </div>
                    <?php } ?>
        </div>

        <!-- LEFT AND RIGHT ARROWS -->
        <div class="arrows">
            <div class="arrow-left"><i class="fa fa-chevron-lefts fa-lg"></i> &laquo;</div>
            <div class="arrow-right"><i class="fa fa-chevron-rights fa-lg"></i>&raquo;</div>
        </div>

  	</div>

  	

  	<!-- JS FOR SCROLLING THE ROW OF THUMBNAILS -->
  	<script type="text/javascript">
  		$(document).ready(function () {
		    $(".arrow-right").bind("click", function (event) {
		        event.preventDefault();
		        $(".vid-list-container").stop().animate({
		            scrollLeft: "+=336"
		        }, 750);
		    });
		    $(".arrow-left").bind("click", function (event) {
		        event.preventDefault();
		        $(".vid-list-container").stop().animate({
		            scrollLeft: "-=336"
		        }, 750);
		    });
		});
  	</script>


  	<!-- google analytics -->
  	

  </body>
</html>
