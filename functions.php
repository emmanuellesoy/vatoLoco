<?php

/*
* Se activa la opción para la imagen destacada (thumbnails).
*/

if ( function_exists( 'add_theme_support' ) )
{

    add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) )
	{ 
		add_image_size( 'post-thumbnails', 300, 300, false);
	}
}

?>