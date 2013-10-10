<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/cholos.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
      var wp_url = "<?php bloginfo('wpurl'); ?>";
      var tp_url = "<?php bloginfo('template_directory'); ?>";
      var b = "<?php echo get_permalink(); ?>";
    </script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/general.js"></script>

</head>
    <!-- MENU FIJO -->
	 <script>
    $(window).load(function(){
      $("#menu").sticky({ topSpacing: 0 });
    });
  </script>
  <script type="text/javascript">var mp = 1;</script>

  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body onload="mapa()" onunload="GUnload()">
	<?php get_template_part('menu'); ?>
	<!--inicia caja principal-->
	<div class="principal">