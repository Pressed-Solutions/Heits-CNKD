
<?php

if ( is_page( array(14, 30, 32, 201 ) ) ) {
	dynamic_sidebar( 'first-footer-widget-area' );
} else {
dynamic_sidebar( 'secondary-widget-area' );
}
?>
