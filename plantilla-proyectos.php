<!--Inicia Proyectos-->
<div class="proyectos" id="proyectos">
	<div class="tituloSecciones">
		<div class="tituloProyectos">PROYECTOS</div>
	</div>
	<div class="proyectosMenu">
		<ul>
			<li><a onclick="filtro_proyectos('tab1')">WEB</a></li>
			<li><a onclick="filtro_proyectos('tab2')">VIDEO</a></li>
			<li><a onclick="filtro_proyectos('tab3')">FOTOGRAFÍA</a></li>
			<li><a onclick="filtro_proyectos('tab4')">HIBRIDO</a></li>
		</ul>
	</div>
	<?php $categorias = array('web', 'video', 'foto', 'hibrido'); ?>
	<?php $contador = 1; ?>
	<?php foreach ($categorias as $categoria) { ?>
	<div class="galeriaProyectos" id="tab<?php echo $contador; ?>">
	<?php query_posts('category_name='.$categoria.'&posts_per_page=8'); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php $custom_fields = get_post_custom(); ?>
		<div class="imagenIndividual">
			<div class="vista">
				<a href="#div<?php echo $contador; ?>" class='MO'>
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
	<?php endwhile; ?>
	<?php endif; ?>
	<?php $contador++; ?>
	</div> <!--Termina Galeria Proyectos-->
	<?php } ?>
	<div  id="caragar_poryectos_<?php echo $contador; ?>" class="cargarProyectos" onclick="cargar_mas_proyectos();">
		<a>Cargar más proyectos</a>
	</div>
</div><!--Termina Proyectos-->

