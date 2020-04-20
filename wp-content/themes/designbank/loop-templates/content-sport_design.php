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
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>"
                        alt="" />
                    </figure>
                <span>#<?php the_title();?></span>
            </div>
		</div>
    </a>
</li>


