<?php
/*
Plugin Name: generado
Plugin URI: https://github.com/fafecha753/
Description: Modifica etiqueta generator
Version: 1.0
Author: Fabian Fernandez Chaves
Author URI: https://github.com/fafecha753/
License: GPLv2
*/
add_filter( 'the_generator', 'remove_generator', 10, 1 );
function remove_generator ( $html  ) {
  return  preg_replace( '|content=("WordPress.*?")|',
                        'content="Fabian Fernandez Chaves"', $html );
}