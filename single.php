<?php get_header(); ?>

<div class="single-post">
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
}
?>
    <div class="single-category"><?php foreach((get_the_category()) as $category) { $postCategoryUrl = get_category_link($category); echo '<a href="'; echo $postCategoryUrl; echo '">'; echo $category->cat_name . ' '; echo '</a>'; } ?> </div>
    <div class="single-title"><h1><?php the_title(); ?></h1>
    </div>
    <div class="meta-date">
      <span>By <?php the_author_posts_link(); ?> - Published On <?php the_time('M j, Y'); ?> at <?php the_time('g:i A'); ?></span>
    </div>
    <div class="single-image"><?php the_post_thumbnail('full');?>
    </div>
    <div class="ad-area">
  <div>-Advertisement-</div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3708886771161155"
     crossorigin="anonymous"></script>
<!-- PostAdCenter -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3708886771161155"
     data-ad-slot="8062816138"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <div class="share-icons"></div>
    <div class="single-content">
    <?php the_content(); ?>
     </div>
    
   
      <?php
$posttags = get_the_tags();
if ($posttags) {
    echo '<div class="tag-title">Tags:</div>';
    echo '<div class="tag-cloud">';
  foreach($posttags as $tag) {
    $tag_link = get_tag_link($tag->term_id);
    echo '<span>';
    echo '<a href="';
    echo $tag_link;
    echo '">';
    echo $tag->name . ' '; 
    echo '</a>';
    echo '</span>';
  }
  }
  else {
  echo "";
}
?>
    </div>
    
  </div>
   
   <div class="ad-area">
  <span>-Advertisement-</span>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3708886771161155"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-3708886771161155"
     data-ad-slot="7871244446"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
   
   <div class="category-title">
    <h3>Related Posts</h3>
  </div>
  <section>
  <div class="li-box">
    <?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>

 
  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail('full');?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>
  

<?php }
wp_reset_postdata(); ?>
</div>
</section>


<?php get_footer(); ?>