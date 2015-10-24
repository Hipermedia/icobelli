<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="SauteBlocks u-contenedor">
	<!-- Contenedor -->
	<div class="SauteBlocks-contenido">
		
		<!-- Títulos de la sección -->
<!-- 		<div class="SauteBlocks-titulos u-contenedor">
			<h1 class="SauteBlocks-titulo"><?php the_field('tituloBloques', 'option'); ?></h1>
			<h2 class="SauteBlocks-subtitulo">
				<?php the_field('subtituloBloques', 'option'); ?>
			</h2>
		</div> -->
		
		<?php if( have_rows('bloquesSaute', 'option') ): ?>
			<?php while( have_rows('bloquesSaute', 'option') ): the_row(); ?>
				
	 			<!-- bloque -->
				<div class="SauteBlocks-block" >
					<!-- Imágen del bloque -->
					<figure class="SauteBlocks-blockFigure" style="background-image: url('<?php the_sub_field('imagen', 'option'); ?>')">
						<!-- <img src="<?php the_sub_field('imagen'); ?>" alt="<?php the_sub_field('titulo'); ?>"> -->
					</figure>
					<!-- Contenido del bloque -->
					<div class="SauteBlocks-blockWrapper">
						<div class="SauteBlocks-blockContent">
							<?php the_sub_field('texto', 'option'); ?>
							<a href="" class="SauteBlocks-blockAction btn btn-default btn-raised">
								<i class="fa fa-plus"></i>
								Conoce más
							</a>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>