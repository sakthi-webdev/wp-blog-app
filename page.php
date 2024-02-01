<?php
/* Default Page Template */
?>

<?php get_header(); ?>

<div class="page-style">
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
}
?>
<?php the_content(); ?></div>

<?php get_footer(); ?>