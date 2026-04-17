<?php

global $site;

$site = [
    'brand' => 'Clinica Dra. Elena Ruiz',
    'hero_title' => 'Dra. Elena Ruiz',
    'hero_subtitle' => 'Dermatologia clinica y estetica con una experiencia sobria, precisa y de alto nivel.',
    'about_title' => 'Cuidado dermatologico con criterio medico',
    'about_text' => 'La Clinica Dra. Elena Ruiz está pensada para pacientes que buscan un servicio medico de primer nivel, confianza profesional y una atencion clara, elegante y personalizada. El objetivo del prototipo es transmitir prestigio, serenidad y autoridad clinica desde la primera impresion.',
    'project_featured_title' => 'Shoreline',
    'project_featured_text' => 'Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!',
    'project_one_title' => 'Dermatologia Clinica',
    'project_one_text' => 'Evaluacion, diagnostico y tratamiento de condiciones cutaneas con un enfoque medico riguroso y cercano.',
    'project_two_title' => 'Consulta Estetica',
    'project_two_text' => 'Valoracion integral para diseñar planes orientados a salud de la piel, armonia y resultados naturales.',
    'project_three_title' => 'Tecnologia Dermatologica',
    'project_three_text' => 'Procedimientos asistidos por tecnologia y protocolos actualizados en un entorno de alta confianza.',
    'signup_title' => 'Subscribe to receive updates!',
    'address' => 'Escazu Medical Center, San Jose, Costa Rica',
    'email' => 'citas@draelenaruiz.com',
    'phone1' => '(+506) 7300-2200',
    'phone2' => '(+506) 7300-3300'
];

if (file_exists(get_template_directory() . '/config/config.php')) require_once get_template_directory() . '/config/config.php';
if (file_exists(get_template_directory() . '/functions/functions.php')) require_once get_template_directory() . '/functions/functions.php';

function lanzah_enqueue_assets() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('lanzah-styles', get_template_directory_uri() . '/assets/css/styles.css', array('bootstrap-css'), '1.0');
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v6.3.0/js/all.js', array(), '6.3.0', false);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('lanzah-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('bootstrap-bundle'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lanzah_enqueue_assets');
