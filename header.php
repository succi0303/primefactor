<!DOCTYPE html>
<html xmlns="http://ogp.me/ns#"
xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_rul'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- コンテナ -->
<div id="container">

<!-- ヘッダー -->
<div id="header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p id="desc"><?php bloginfo('description'); ?></p>
<div id="cat">
<img src="<?php bloginfo('template_url'); ?>/cat_icon.png" alt="*" width="75" height="75" />
</div>
<div id="subinfo">
<a href="<?php bloginfo('rss2_rul'); ?>"><img src="<?php bloginfo('template_url'); ?>/feed.png" alt="RSS FEED" width="28" height="28" /></a>
</div>
<div id="nav">
<?php wp_nav_menu(array(
	'theme_location' => 'navigation'
)); ?>
</div>
</div>