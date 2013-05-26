<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

        <meta name="bitly-verification" content="1aca704b35bc"/>


	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>" />

<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/style_ie.css" />
<![endif]-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

	<?php wp_head(); ?>
<!-- bOGaEEHrTIwpAdafiprKmqOB-Dk -->
<!--facebook java-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<script type="text/javascript" src="//use.typekit.net/lrl7xzd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<title><?php bloginfo('name'); ?><?php wp_title('|',true,''); ?></title>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30684376-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>


<div id="site-wrapper">

	<?php
		// Do we have a header image around?
		if ( '' != get_header_image() ) :
	?>

	<div id="header-image">
		<?php if (function_exists('dfrads')) { echo dfrads('7047696'); } ?>
	</div>

<div id="navigator">
	<a class="smi" href="http://thestrangerblog.com/archives/">Archives</a>
	<a class="smi" href="http://thestrangerblog.com/best-entries/">The Best</a>
	<a class="smi" href="http://thestrangerblog.com/about-contact/">About</a>
	<a class="smi" href="http://thestrangerblog.com/contact/">Contact</a>
	<a class="smi" href="http://thestrangerblog.com/press/">Press</a>
	<a class="smi" href="http://thestrangerblog.com/boutique/">Boutique</a>
</div>


	<?php endif; ?>

<div id="sidebar">

<!--sidebar content--> 

<div class="sidebar-item">
	<i>The Stranger</i> is a fashion and travel blog by Michelle Lara Lin (founder of <a href="https://www.quotesome.com" target="_blank"><b>Quotesome</b></a>).<br /><br /> Here you will discover inspiration through a scrapbook of journeys and record of personal thoughts, an insatiable fervor for life, and aesthetic appreciation of fashion and art beyond. Named in loving memory of writer Albert Camus.<br /><br />
<a href="http://www.amazon.com/gp/product/0679720200/ref=as_li_ss_il?ie=UTF8&camp=1789&creative=390957&creativeASIN=0679720200&linkCode=as2&tag=thestra01-20"><img border="0" src="http://ws.assoc-amazon.com/widgets/q?_encoding=UTF8&ASIN=0679720200&Format=_SL160_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=thestra01-20" ></a><img src="http://www.assoc-amazon.com/e/ir?t=thestra01-20&l=as2&o=1&a=0679720200" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

</div>

<div class="sidebar-item">
	<a href="http://fashion.teenvogue.com"><img src="http://tid.al/badge/get/michelle-lara-lin/fashion-click-blogger"></a>
</div>


<div class="sidebar-item">
	<div class="fb-like-box" data-href="http://www.facebook.com/thestrangerblog" data-width="200" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>
</div>

<div class="sidebar-item">
	<a href="https://twitter.com/michellelaralin" class="twitter-follow-button" data-show-screen-name="false" data-align="vertical" data-show-count="true" data-lang="en" data-size="large">Follow</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="sidebar-item">
<!--sponsor advertisers-->

<div class="sidebar-ad"><?php if (function_exists('dfrads')) { echo dfrads('9783838'); } ?></div><!--gucci-->

<div class="sidebar-ad"><?php if (function_exists('dfrads')) { echo dfrads('3098578'); } ?></div><!--armani-->

<div class="sidebar-ad"><?php if (function_exists('dfrads')) { echo dfrads('4142071'); } ?></div><!--nap-->

</div>

</div>