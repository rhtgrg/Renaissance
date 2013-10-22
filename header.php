<?php
/**
 * This is the header for the theme. It will generally be at the top of the
 * page, and contains most of the metadata and includes, as well as the
 * starting tags of the content divs.
 */
 ?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>
      <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="g-container">
