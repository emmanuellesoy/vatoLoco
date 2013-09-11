<div class="equipo" id="equipo">
	<div class="tituloSecciones">
		<div class="tituloEquipo">Equipo</div>
	</div>
	<div class="equipoResumen">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in bibendum arcu. Cras eu accumsan velit. Vestibulum sit amet lorem tellus, eget pretium arcu. Morbi ac purus urna, quis tincidunt felis. Nam luctus felis non sem interdum placerat. Vestibulum eu nibh ipsum, in fermentum mi. Nam id ante in nunc ornare vestibulum. Phasellus venenatis imperdiet sodales. Suspendisse ut imperdiet ligula. Phasellus lacinia tincidunt consectetur. Phasellus pulvinar rutrum felis, id convallis justo placerat interdum.
	</div>

	  <div class="miembrosEquiipo">
            <?php query_posts('category_name=equipo');?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php  $meta = get_post_custom(get_the_ID); ?>
                
                <div class="contenidoEquipo">
                    <div class="circuloEquipo">
                        <div class="imagenCirculo" onclick="desaparece('<?php the_ID(); ?>')" onmouseover="aparece('<?php the_ID(); ?>')">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single'    ); } ?>
                        </div>

                        <div class="circuloRedesSociales">
                            <div class="circuloRedesSocialesIndividual">
                                <?php if ($meta['twitter'][0] != ''){ ?>
                                <a href="<?php echo $meta['twitter'][0]; ?>" title="Sigue a <?php the_title(); ?> en Twitter">
                                    <img src="<?php bloginfo('template_url'); ?>/img/Twitter.png" alt="Sigue a <?php the_title(); ?> en Twitter" title="Sigue a <?php the_title(); ?> en Twitter" />
                                </a>
                                <?php } ?>
                            </div>
                            <div class="circuloRedesSocialesIndividual circuloRedesSocialesIndividualInferior">
                                <?php if ($meta['facebook'][0] != ''){ ?>
                                <a href="<?php echo $meta['facebook'][0]; ?>" title="Sigue a <?php the_title(); ?> en Facebook">
                                    <img src="<?php bloginfo('template_url'); ?>/img/Facebook.png" alt="Sigue a <?php the_title(); ?> en Facebook" title="Sigue a <?php the_title(); ?> en Facebook" />
                                </a>
                                <?php } ?>
                            </div>
                            <div class="circuloRedesSocialesIndividual circuloRedesSocialesIndividualInferior">
                                <?php if ($meta['google'][0] != ''){ ?>
                                <a href="<?php echo $meta['google'][0]; ?>" title="Sigue a <?php the_title(); ?> en Google +">
                                    <img src="<?php bloginfo('template_url'); ?>/img/G+.png" alt="Sigue a <?php the_title(); ?> en Google +" title="Sigue a <?php the_title(); ?> en Google +" />
                                </a>
                                <?php } ?>
                            </div>
                            <div class="circuloRedesSocialesIndividual">
                                <?php if ($meta['linkedin'][0] != ''){ ?>
                                <a href="<?php echo $meta['linkedin'][0]; ?>" title="Sigue a <?php the_title(); ?> en LinkedIn">
                                    <img src="<?php bloginfo('template_url'); ?>/img/LinkdIn.png" alt="Sigue a <?php the_title(); ?> en LinkedIn" title="Sigue a <?php the_title(); ?> en LinkedIn" />
                                </a>
                                <?php } ?>
                            </div>
                        </div> <!-- Fin circuloRedesSociales -->
                    </div> <!-- Fin circulo  -->

                    <div class="descripcionEquipoIndividual" id="description-<?php the_ID(); ?>">
                        <h6><?php the_title(); ?></h6>
                        <h6><small><?php echo $meta['cargo'][0] ?></small></h6>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div> <!-- Fin contenido Equipo -->
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>

</div> <!-- Termina Equipo -->