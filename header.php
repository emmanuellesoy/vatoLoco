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
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/general.js"></script>

</head>
    <!-- MENU FIJO -->
	 <script>
    $(window).load(function(){
      $("#menu").sticky({ topSpacing: 0 });
    });
  </script>

        <!-- MENU PROYECTOS -->  
<script type='text/javascript'> 
    $(document).ready(function() {
        $(".galeriaProyectos").hide(); //Ocultar capas
        $("div.proyectosMenu li:first").addClass("activa").show(); //Activar primera pestaña
        $(".galeriaProyectos:first").show(); //Mostrar contenido primera pestaña
        // Sucesos al hacer click en una pestaña
        $("div.proyectosMenu li").click(function() {
            $("div.proyectosMenu li").removeClass("activa"); //Borrar todas las clases "activa"
            $(this).addClass("activa"); //Añadir clase "activa" a la pestaña seleccionada
            $(".galeriaProyectos").hide(); //Ocultar todo el contenido de la pestaña
            var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa 
            $(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
            return false;
            });
        });
</script>

        <!-- DESPLIEGA PROYECYOS -->
<script>
      jQuery(document).ready(function(){ 
          $(".oculto").hide();              
          $(".MO").click(function(){
                var nodo = $(this).attr("href");  
       
                if ($(nodo).is(":visible")){
                     $(nodo).hide();
                     return false;
                }else{
              $(".oculto").hide();                             
              $(nodo).fadeToggle( "slow" );
              return false;
                }
          });
      }); 
  </script>

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