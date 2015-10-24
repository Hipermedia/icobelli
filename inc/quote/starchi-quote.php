<?php 
/** Sección de texto. Estilo Starchi
------------------------------------------------------------------- */ 
?>

<!-- StarchiBloques -->
<section id="videobg" class="StarchiQuote u-contenedorCompleto" style="background-image: url('<?php the_field('imagenBgQuote', 'option'); ?>')">
	<!-- Contenedor -->
	<div class="StarchiQuote-contenido">
		<div class="StarchiQuote-texto">
			<h2 class="StarchiQuote-textoCita"><?php the_field('tituloQuote', 'option'); ?></h2>
			<p class="StarchiQuote-textoDescripcion"><?php the_field('subtituloQuote', 'option'); ?></p>
			<a class="StarchiQuote-textoBoton" href="<?php the_field('enlaceQuote', 'option'); ?>"><?php the_field('botonQuote', 'option'); ?></a>
		</div>
		<i class="fa fa-quote-right StarchiQuote-textoIcono"></i>
	</div>
</section>