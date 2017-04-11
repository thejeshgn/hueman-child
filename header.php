<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
  <!-- Start of my new code to add all the styles defined in the page -->
  <?php
    if(function_exists('have_rows') && have_rows('script_styles')):
       while ( have_rows('script_styles') ) : the_row();
        echo "<link rel='stylesheet'  href='" . get_sub_field('lib_style') . "'/>\n";
       endwhile;    
    else :
        // no library styles
    endif;
  ?>
  <!-- End of my new code to add all the styles defined in the page -->

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

  <?php do_action('__before_header') ; ?>

  <?php hu_get_template_part('parts/header-main'); ?>

  <?php do_action('__after_header') ; ?>

  <div class="container" id="page">
    <div class="container-inner">
      <?php do_action('__before_main') ; ?>
      <div class="main">
        <div class="main-inner group">
          <?php do_action('__before_content') ; ?>
