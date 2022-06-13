<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>



<div class="row">
    <div class="col-md-8">
    <?php
echo do_shortcode('[smartslider3 slider="3"]');
?>

</div>


<?php get_template_part( 'sidebar-templates/sidebar',  'right' ); ?> 
</div>
<div class="row text-center">
    <div class="col-md-5 text-center">
    <?php get_template_part( 'sidebar-templates/sidebar', 'left' ); ?>  
</div>
<div class="col-md-7 text-center">
    <?php get_template_part( 'sidebar-templates/sidebar', 'middle' ); ?>  
</div>

</div>

    

<?php
echo do_shortcode('[rtbs name="211"]');
?>


<?php
get_footer();
