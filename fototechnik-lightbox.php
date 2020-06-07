<?php
/*
    Plugin Name: Fototechnik Lightbox
    Plugin URI: https://github.com/Raychan87/fototechnik-lightbox
    Description: Lightbox designed by and for photographers.
    Version: 0.1
    Author: RayChan
    Author URI: https://fototour-und-technik.de
    Text Domain: Fototour und Technik
    Domain Path: /languages
*/

/* 
   Damit unsere PHP-Datei nicht von außerhalb unserer WordPress-Instanz ausgeführt werden kann, 
   überprüfen wir nach dem Header-Kommentar ob die Konstante „ABSPATH“ gesetzt ist. 
   Die Konstante „ABSPATH“ wird in der „wp-config.php“ definiert und 
   beinhaltet den absoluten Dateipfad zur WordPress Installation.
*/
defined( 'ABSPATH' ) or die( 'Are you ok?' );

// Core
include "ftl_core.php"; /* lade ftl_core.php */
$ftl_core = new FotoTechnik_Core; 






?>
