<?php
/**
* A Simple Tag Template
*/
 
get_header(); ?> 

<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>
<header>
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb( '<p id=“breadcrumbs”>','</p>' );
}
?>
<div class="category-title">

    <h3><?php single_tag_title( '', true ); ?></h3>
  </div>
  
<?php endif; ?>
</header>


<section>

<div class="li-box">
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>


<div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<?php  echo '<div class="btn-area">'; echo '<div class="back-btn">';   next_posts_link( '« Older', $query->max_num_pages ); echo '</div>';  echo '<div class="next-btn">'; previous_posts_link( 'Newer »' ); echo '</div> </div>'; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>