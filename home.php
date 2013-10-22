<?php
/**
 * Theme for the home page.
 *
 * @author Rohit Garg
 */
get_header();
?>
<div id="hm-hero">
  Hello, my name is <b>Rohit Garg</b> and I make things
</div>
<?php
  /* Get the first horizontal widget */
  get_template_part('horizontal');
?>
<?php
get_footer();
?>