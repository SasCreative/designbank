<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package design_bank
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'design_bank_container_type' );
?>

<div class="wrapper" id="author-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <div class="row">

            <!-- Do the left sidebar check -->
            <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

            <main class="site-main" id="main">

                <header class="page-header author-header">

                    <?php
					if ( isset( $_GET['author_name'] ) ) {
						$curauth = get_user_by( 'slug', $author_name );
					} else {
						$curauth = get_userdata( intval( $author ) );
					}
					?>

                    <h1><?php echo esc_html__( 'About:', 'design_bank' ) . ' ' . esc_html( $curauth->nickname ); ?></h1>

                    <?php if ( ! empty( $curauth->ID ) ) : ?>
                    <?php echo get_avatar( $curauth->ID ); ?>
                    <?php endif; ?>

                    <?php if ( ! empty( $curauth->user_url ) || ! empty( $curauth->user_description ) ) : ?>
                    <dl>
                        <?php if ( ! empty( $curauth->user_url ) ) : ?>
                        <dt><?php esc_html_e( 'Website', 'design_bank' ); ?></dt>
                        <dd>
                            <a
                                href="<?php echo esc_url( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a>
                        </dd>
                        <?php endif; ?>

                        <?php if ( ! empty( $curauth->user_description ) ) : ?>
                        <dt><?php esc_html_e( 'Profile', 'design_bank' ); ?></dt>
                        <dd><?php esc_html_e( $curauth->user_description, 'design_bank' ); ?></dd>
                        <?php endif; ?>
                    </dl>
                    <?php endif; ?>

                    <h2><?php echo esc_html( 'Posts by', 'design_bank' ) . ' ' . esc_html( $curauth->nickname ); ?>:
                    </h2>

                </header><!-- .page-header -->

                <ul>

                    <!-- The Loop -->
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <?php
								printf(
									'<a rel="bookmark" href="%1$s" title="%2$s %3$s">%3$s</a>',
									esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) ),
									esc_attr( __( 'Permanent Link:', 'design_bank' ) ),
									the_title( '', '', false )
								);
								?>
                        <?php design_bank_posted_on(); ?>
                        <?php esc_html_e( 'in', 'design_bank' ); ?>
                        <?php the_category( '&' ); ?>
                    </li>
                    <?php endwhile; ?>

                    <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                    <?php endif; ?>

                    <!-- End Loop -->

                </ul>

            </main><!-- #main -->

            <!-- The pagination component -->
            <?php design_bank_pagination(); ?>

            <!-- Do the right sidebar check -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div> <!-- .row -->

    </div><!-- #content -->

</div><!-- #author-wrapper -->

<?php get_footer(); ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Shop</th>
            <th scope="col">No. of customers</th>
            <th scope="col">Opening Hours</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Manukau</th>
            <th>5</th>
            <td>Monday – Friday: 8:30 am - 5:00pm <br> Saturday: 9.00 am - 2.00pm</td>
        </tr>
        <tr>
            <th scope="row">Avondale</th>
            <th>2</th>
            <td>Monday - Friday : 9.00 am - 5.00pm  <br> Saturday: 9.00 am - 2.00pm</td>
        </tr>
		<tr>
            <th scope="row">North Harbour</th>
            <th>2</th>
            <td>Monday - Friday : 10.00 am - 2.00pm  <br> Saturday: 10.00 am - 6.00pm</td>
        </tr>
		<tr>
            <th scope="row">Pukekohe</th>
            <th>2</th>
            <td>Monday - Friday : 8.30 am - 5.00pm  <br> Saturday: 9.00 am - 1.00pm</td>
        </tr>
		<tr>
            <th scope="row">Papakura</th>
            <th>3</th>
            <td>Monday - Friday : 8.30 am - 5.00pm  <br> Saturday: 9.00 am - 1.00pm</td>
        </tr>
    </tbody>
</table>