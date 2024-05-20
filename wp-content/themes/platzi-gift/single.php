<?php get_header(); ?> <!-- Incluye el encabezado del tema de WordPress -->

<main class='container my-3'>
    <?php if(have_posts()){ // Comprueba si hay publicaciones
        while(have_posts()){ // Mientras haya publicaciones
            the_post(); // Configura la publicación actual
            ?>
            <h1 class='my-5'><?php the_title() ?></h1> <!-- Muestra el título de la publicación -->
            <div class="row">
                <div class="col-md-6"> <!-- Columna para el contenido -->
                    <?php the_content(); ?> <!-- Muestra el contenido de la publicación -->
                </div>
                <div class="col-md-6"> <!-- Columna para la imagen destacada -->
                    <?php the_post_thumbnail('large'); ?> <!-- Muestra la imagen destacada de la publicación -->
                </div>
            </div>
            <?php
        }
    } ?>
</main>

<?php get_footer(); ?> <!-- Incluye el pie de página del tema de WordPress -->
