<?php
// Función para inicializar el tema y agregar compatibilidades
function init_template(){
    // Agregar soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    // Agregar soporte para el título del tema
    add_theme_support('title-tag');

    // Registrar menús de navegación
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal', 
            'menu-responsive'=> 'menu responsive'
        )
    );
}

// Función para cargar estilos y scripts del tema
function assets(){
    // Registrar y encolar estilos CSS
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1','all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap','','1.0', 'all');
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');
   
    // Registrar y encolar scripts JavaScript
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0', true);
    wp_enqueue_script('boostraps', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'),'4.4.1', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

// Acción para encolar estilos y scripts en el front-end
add_action('wp_enqueue_scripts','assets');

// Función para registrar y configurar la barra lateral (widgets)
function sidebar(){
    // Registrar una barra lateral con nombre, descripción y configuraciones específicas
    register_sidebar(
        array(
            'name' => 'Pie de página', // Nombre de la barra lateral
            'id'   => 'footer', // Identificador único
            'description' => 'Zona de Widgets para pie de página', // Descripción de la barra lateral
            'before_title' => '<p>', // Etiqueta HTML antes del título del widget
            'after_title'  => '</p>', // Etiqueta HTML después del título del widget
            'before_widget' => '<div id="%1$s" class="%2$s">', // Etiqueta HTML antes del widget
            'after_widget'  => '</div>', // Etiqueta HTML después del widget
        )
    );
}

// Acción para inicializar las áreas de widgets
add_action('widgets_init', 'sidebar');

// Función para registrar un nuevo tipo de publicación (Custom Post Type)
function productos_type(){
    // Etiquetas y argumentos para el nuevo tipo de publicación
    $labels = array(
        'name' => 'Productos', // Nombre plural
        'singular_name' => 'Producto', // Nombre singular
        'manu_name' => 'Productos', // Nombre en el menú
        
    );

    $args = array(
        'label'  => 'Productos',  // Etiqueta del tipo de publicación
        'description'=> 'Productos de Platzi', // Descripción del tipo de publicación
        'labels'  => $labels, // Etiquetas definidas anteriormente
        'supports'=> array('title','editor','thumbnail', 'revisions'), // Características soportadas
        'public' => true, // Visible públicamente
        'show_in_menu' => true, // Mostrar en el menú de administración
        'menu_position' => 5, // Posición en el menú
        'menu_icon' => 'dashicons-cart', // Icono en el menú
        'can_export' => true, // Exportable
        'publicly_queryable' => true, // Consultable públicamente
        'rewrite' => true, // Reescribir URLs
        'show_in_rest' => true, // Mostrar en la API REST de WordPress
     
    );    

    // Registrar el nuevo tipo de publicación
    register_post_type('producto', $args);
}

function agregar_icono_hamburguesa($items, $args) {
    if ($args->theme_location == 'top_menu') {
        $items .= '<li class="menu-item menu-item-hamburguesa">';
        $items .= '<a href="#" class="menu-hamburguesa"><span class="dashicons dashicons-menu"></span></a>';
        $items .= '</li>';
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'agregar_icono_hamburguesa', 10, 2);


// Acción para inicializar el nuevo tipo de publicación
add_action('init', 'productos_type');//HOOKS
?>
