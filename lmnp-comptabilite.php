<?php
/**
 * Plugin Name: Comptabilité LMNP
 * Plugin URI: https://github.com/qgiard/lmnp_reel
 * Description: Plugin pour gérer la comptabilité LMNP, générer des documents et suivre les déclarations fiscales.
 * Version: 1.0.0
 * Author: qgiard
 * Author URI: https://github.com/qgiard
 * License: GPL2
 */

// Sécurité : empêcher l'accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

// Charger les fichiers nécessaires
function lmnp_comptabilite_enqueue_scripts() {
    wp_enqueue_style('lmnp-comptabilite-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('lmnp-comptabilite-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'lmnp_comptabilite_enqueue_scripts');

// Créer une page de menu dans l'administration WordPress
function lmnp_comptabilite_create_menu() {
    add_menu_page(
        'Comptabilité LMNP', // Titre de la page
        'Comptabilité LMNP', // Titre du menu
        'manage_options',    // Capacité requise
        'lmnp-comptabilite', // Slug
        'lmnp_comptabilite_page_content', // Fonction de rappel
        'dashicons-chart-line', // Icône
        6                     // Position
    );
}
add_action('admin_menu', 'lmnp_comptabilite_create_menu');

// Contenu de la page d'administration
function lmnp_comptabilite_page_content() {
    echo '<div class="wrap">';
    echo '<h1>Comptabilité LMNP</h1>';
    echo '<p>Bienvenue dans votre espace de gestion de comptabilité LMNP.</p>';
    // Ajouter ici les formulaires et fonctionnalités du programme
    echo '</div>';
}
