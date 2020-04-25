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


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/umbrella/css/bootstrap-custom.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/umbrella/css/umbrella.css">
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/jquery/dist/jquery.min.js"></script>
</head>


<body <?php body_class(); ?> <?php design_bank_body_attributes(); ?>>
