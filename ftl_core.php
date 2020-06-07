<?php

class FotoTechnik_Core {

    /* Gobale Variablen */
    public $images = [];

    /* Der Konstruktor, __construct(), wird bei jeder Initialisierung der Klasse aufgerufen. */
    public function __construct() {

    /* Initialize filters */
    include_one( 'ftl_filters.php' ); 
    new FotoTechnik_Filters();

    // Initialize exif helpers
	include_once( 'ftl_exif.php' );
    
    
    }
}