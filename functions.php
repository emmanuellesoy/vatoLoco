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
/* Obtiene 8 post */
function traer_mas()
{
	$query = new WP_Query( $_POST['query'] );
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
	?>
	<div class="imagenIndividual">
			<div class="vista">
				<a class='MO'>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<div class="mascara" onclick="muestra_el_proyecto_grande(<?php echo get_the_ID(); ?>)"> 
                		<h2><?php the_title(); ?></h2>  
                		<?php the_content(); ?>  
                	</div>
                </a>
			</div><!--FIn vista-->
		</div> <!--Termina Imagen Individual-->
		<div class="detallesProyectos oculto" id="div<?php echo get_the_ID(); ?>">
			<div class="contenido">

			</div>
			<div class="detalles">
				<div class="titulo">
					<?php the_title(); ?>
				</div>
				<div class="cliente">
					<?php if($custom_fields['cliente'][0]){ ?>
					<p>
						Cliente: <?php echo $custom_fields['cliente'][0]; ?>
					</p>
					<?php } ?>
					<?php if($custom_fields['cliente'][0]){ ?>
					<p>
						Director de Arte: <?php echo $custom_fields['director'][0]; ?>
					</p>
					<?php } ?>
					<?php if($custom_fields['cliente'][0]){ ?>
					<p>
						Ilustrador: <?php echo $custom_fields['ilustrador'][0]; ?>
					</p>
					<?php } ?>
				</div>
				<div class="descripcion">
					<p>Dscripción</p>
					<?php the_content(); ?>
				</div>
				<div class="redesSociales">
					<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-width="50" data-layout="button_count" data-show-faces="false" data-send="false"></div>
				</div>

			</div><!--Termina detalles-->
		</div>
	<?php
	endwhile; else:
    ?>
    <p>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
    <?php endif;
	die();
}

/*
     * Se inicializan las funciones por defecto
     */

     add_action('wp_ajax_nopriv_traer_mas', 'traer_mas');
     add_action('wp_ajax_traer_mas', 'traer_mas');
?>