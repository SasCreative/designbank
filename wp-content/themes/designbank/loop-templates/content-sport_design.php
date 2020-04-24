<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package design_bank
 */

// Exit if accessed directly.
?>

<li class="list-inline-item">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
        <div class="hover14 column">
        <div>
                <figure>
                <?php 
		$image = get_field('list_page');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </figure>
            </div>
		</div>
    </a>
</li>


