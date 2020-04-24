<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package design_bank
 */

// Exit if accessed directly.
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body>
    <?php do_action( 'wp_body_open' ); ?>
    <div class="site" id="page"> 

    <!-- ******************* The Navbar Area ******************* -->
     <div id="wrapper-navbar">
            <nav id="main-nav" class="navbar navbar-expand-xl" aria-labelledby="main-nav-label">
                <div class="container-fluid p-0">
                    <div class="nav_row">
                        <div class="nav_row_t"> 
     <!-- Your site title as branding in the menu  -->
    <?php if ( ! has_custom_logo() ) { ?>

                                <?php if ( is_front_page() && is_home() ) : ?>

<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
        itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

<?php else : ?>

<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
    itemprop="url"><?php bloginfo( 'name' ); ?></a>

<?php endif; ?>

<?php } else {
the_custom_logo();
} ?> 
    end custom logo 
     <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
    aria-label="<?php esc_attr_e( 'Toggle navigation', 'design_bank' ); ?>">
    <span class="navbar-toggler-icon">
    <i class="fas fa-bars"></i>
    </span>
</button>
</div>
<div class="nav_row_b">
<?php wp_nav_menu(
array(
'theme_location'  => 'primary',
'container_class' => 'collapse navbar-collapse ',
'container_id'    => 'navbarNavDropdown',
'menu_class'      => 'nav justify-content-center',
'fallback_cb'     => '',
'menu_id'         => 'main-menu',
'depth'           => 2,
'walker'          => new design_bank_WP_Bootstrap_Navwalker(),
)
); ?>
</div>

</div>

</div> 

    </nav>










    <div class="nav_row">
        <div class="container">
            <div class="row">

            </div>

        </div>
    </div>
    <div class="nav_row2">
       
    </div>



    </div>