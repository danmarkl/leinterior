<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head> 
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->              
  <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js" type="text/javascript" charset="utf-8"></script>    
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  
<script type="text/javascript">
$(document).ready(
function($){
  $('#content_inside').infinitescroll({
 
    navSelector  : "div.load_more_text",            
                   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
                   // selector for the NEXT link (to page 2)
    itemSelector : "#content_inside .home_post_box"
                   // selector for all items you'll retrieve
  },function(arrayOfNewElems){
  
  
	$('.home_post_box').hover(
		function() {
			$(this).find('.home_post_text').css('display','block');
		},
		function () {
			$(this).find('.home_post_text').css('display','none');
		}
	);  
  
      //$('.home_post_cont img').hover_caption();
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
}  
);
</script>  
</head>
<body>
<?php $shortname = "neue"; ?>
 <?php if(get_option($shortname.'_background_image_url','') != "") { ?>
<style type="text/css">
  body { background-image: url('<?php echo get_option($shortname.'_background_image_url',''); ?>'); }
</style>
<?php } ?>
<div id="main_container">
	<div id="header">
		<div class="left">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
			  <a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" /></a>
			<?php } else { ?>
			  <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" class="logo" /></a>
			<?php } ?>                		
		</div>
		
		<div class="right">
			<div class="head_social">
				<?php if(get_option($shortname.'_twitter_link','') != "") { ?>
					<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_facebook_link','') != "") { ?>
					<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_google_plus_link','') != "") { ?>
					<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_dribbble_link','') != "") { ?>
					<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_pinterest_link','') != "") { ?>
					<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a>
				<?php } ?>
				<div class="clear"></div>
			</div><!--//head_social-->
			
			<div class="header_menu">
	<!--
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">CATEGORIES</a>
						<ul>
							<li><a href="#">Wordpress Themes</a></li>
							<li><a href="#">Create Plugins</a></li>
							<li><a href="#">Wordpress Themes</a></li>
							<li><a href="#">Create Plugins</a></li>							
						</ul>
					</li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>-->
				<?php wp_nav_menu('menu=header_menu&container=false&menu_id='); ?>
				<div class="clear"></div>
		</div><!--//header_menu-->
			
			<div class="clear"></div>
			
</div>
			
			
		
		
		
		<div class="clear"></div>
<div class="tagline">
			<?php echo get_option($shortname.'_header_text','Use Neue Theme Settings to update this text...') ?>
		</div><!--//tagline-->
		
		
	</div><!--//header-->