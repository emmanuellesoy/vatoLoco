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
				<?php $categorias = array('web', 'video', 'foto', 'hibrido'); ?>
				<?php $contador = 0; ?>
				<?php foreach ($categorias as $categoria) { ?>
				<?php query_posts('category_name='.$categoria.'&posts_per_page=1'); ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $custom_fields = get_post_custom(); ?>
						<li onclick="mostrar_slider(<?php echo $contador; ?>);" class="slider<?php echo ucfirst($categoria) ?> sliderProyectos">
							<a onclick="no_liga();" href="<?php echo get_permalink(); ?>" title="Proyecto 1"><?php the_title(); ?>
								<p><?php echo $custom_fields['subtitulo'][0];?></p>
							</a>
						</li>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php $contador++; ?>
				<?php } ?>
			</ul>
		</aside>
		
		
			<?php $categorias = array('web', 'video', 'foto', 'hibrido'); ?>
			<?php $contadorD = 0; ?>
			<?php foreach ($categorias as $categoria) { ?>
				<?php query_posts('category_name='.$categoria.'&posts_per_page=1'); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $contador_0 = 0; ?>
					<div class="imagenSlider <?php echo 'imagenSlider_'.$contadorD; ?>">
						<?php $custom_fields = get_post_custom(); ?>
						<?php if($custom_fields['slider']){ foreach ($custom_fields['slider'] as $frame ) { ?>
							<img class="slider_inicio slider_inicio_<?php echo $contador_0; ?>" src="<?php echo $frame; ?>">
							<?php $contador_0++; ?>
						<?php } }?>
						<div class="controlesSlider">
							<div class="controlesSliderPrevio" onclick="slider_principal('izq');" data-frame="1"></div>
							<div class="controlesSliderSiguiente" onclick="slider_principal('der');"></div>
						</div>
						
						<div class="detallesProyectoSlider">
							<div class="textosSlider">
								<div class="tituloProyectoSlider"><?php the_title(); ?></div>
								<div class="resumenProyectoSlider">
									<?php the_content(); ?>
								</div>
							</div>
							
							<div class="botonProyectoSlider">
								<div class="irProyectoSlider">
									<a href="">Ver proyecto</a>
								</div>
							</div>
						</div>
					</div>
					<?php $contadorD++; ?>
					<?php endwhile; ?>
				<?php endif; ?>			
			<?php } ?>
		</div> <!--Termina Slider-->
</div> <!--Termina Seccion Inicio/Slider-->
