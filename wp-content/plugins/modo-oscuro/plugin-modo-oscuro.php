<?php 
//Plugin name: modo oscuro
//Description:Activa tu modo oscuro en tu theme
//Version : 1.0
//author : sofia
//author url :
function estilos_plugin(){
    $estilos_url= plugin_dir_url(__FILE__);
    wp_enqueue_style('modo_oscuro',$estilos_url.'/assets/css/style.css','','1.0','all');
}
add_action('wp_enqueue_scripts','estilos_plugin');
