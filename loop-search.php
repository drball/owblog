<?php
/**
 * The single post loop.
 *
 */
?>

<?php

	/* Use the framework blog page post loop. */
	PC_Template_Parts::search_page_loop( $s );

?>
<?php if( get_next_posts_link() || get_previous_posts_link() ) : ?>
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link( __( '&laquo; Older Posts', 'presscoders' ) ) ?></div>
        <div class="alignright"><?php previous_posts_link( __( 'Newer Posts &raquo;', 'presscoders' ) ) ?></div>
    </div>
<?php endif; ?>