<!--Inicia Seccion Inicio/Slider-->
<div class="inicio" id="inicio">

	<div class="tituloInicio">
		<h1>Somos <span>Los Cholos</span></h1>
		<h2>Un estudio de Produccion Creativa</h2>
	</div>

	<div class="slider">  <!--inicia Slider-->
		<aside class="tituloSlider">
				<ul>
					<li class="destacados">Proyectos Destacados</li>


					<?php query_posts('category_name=web&posts_per_page=1'); ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $custom_fields = get_post_custom(); ?>
					<li class="sliderWeb sliderProyectos">
						<a href="<?php bloginfo('wpurl'); ?>" title="Proyecto 1"><?php the_title(); ?>
							<p><?php echo $custom_fields['subtitulo'][0];?></p>
						</a>
					</li>
						<?php endwhile; ?>
						<?php endif; ?>


					<li class="sliderVideo sliderProyectos">
						<a href="<?php bloginfo('wpurl'); ?>" title="Proyecto 1">Proyecto 2
							<p>Lorem</p>
						</a>
					</li>
					<li class="sliderFoto sliderProyectos">
						<a href="<?php bloginfo('wpurl'); ?>" title="Proyecto 1">Proyecto 3
							<p>Lorem</p>
						</a>
					</li>
					<li class="sliderHibrido sliderProyectos">
						<a href="<?php bloginfo('wpurl'); ?>" title="Proyecto 1">Proyecto 4
							<p>Lorem</p>
						</a>
					</li>
				</ul>
		</aside>
		
		<div class="imagenSlider">
			<img src="<?php bloginfo('template_directory'); ?>/img/ejemplo.jpg">
			
			
			<div class="controlesSlider">
				<div class="controlesSliderPrevio"></div>
				<div class="controlesSliderSiguiente"></div>
			</div>
			
			<div class="detallesProyectoSlider">
				<div class="textosSlider">
					<div class="tituloProyectoSlider">Titulo</div>
					<div class="resumenProyectoSlider">
						Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a
					</div>
				</div>
				
				<div class="botonProyectoSlider">
					<div class="irProyectoSlider">
						<a href="">Ver proyecto</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!--Termina Slider-->

</div> <!--Termina Seccion Inicio/Slider-->
