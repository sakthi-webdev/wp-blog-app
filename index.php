<?php get_header(); ?>
<div class="home-box">
<?php $cat = array(
    'post-type' => 'post',
    'cat' => '15, 16, 17, 19, 20',
    'showposts' => '1'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

<div class="hero-post"> <div class="large_con">

  <section class="large_sp">
    <img class="large_img" <?php the_post_thumbnail();?></img>
    <div class="title1"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="time-ago"><?php the_time('M j, Y'); ?></div></div>

  </section> </div>

</div>

<?php endwhile; ?>

<section>
<div class="li-box">
<?php $cat = array(
    'post-type' => 'post',
    'offset' => '1',
    'cat' => '15, 16, 17, 19, 20',
    'showposts' => '6'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
</section>

<div class="ad-area">
  <div>-Advertisement-</div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3708886771161155"
     crossorigin="anonymous"></script>
<!-- Header -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3708886771161155"
     data-ad-slot="4905598930"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<section>
<div class="category-title">
    <h3>தமிழ்நாடு</h3>
  </div>
  <div class="li-box">
<?php $cat = array(
    'post-type' => 'post',
    'cat' => '17',
    'showposts' => '6'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<div class="list-read-more"><a href="https://www.dailytamilnadu.com/news/category/tamilnadu/">மேலும் காண்க</a></div>
</section>

<div class="ad-area">
  <div>-Advertisement-</div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3708886771161155"
     crossorigin="anonymous"></script>
<!-- PostAd -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3708886771161155"
     data-ad-slot="8653272258"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<section>
<div class="category-title">
    <h3>இந்தியா</h3>
  </div>
  <div class="li-box">
<?php $cat = array(
    'post-type' => 'post',
    'cat' => '16',
    'showposts' => '6'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<div class="list-read-more"><a href="https://www.dailytamilnadu.com/news/category/india/">மேலும் காண்க</a></div>
</section>

<div class="ad-area">
  <div>-Advertisement-</div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3708886771161155"
     crossorigin="anonymous"></script>
<!-- Insider -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3708886771161155"
     data-ad-slot="9966353928"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<section>
<div class="category-title">
    <h3>உலகம்</h3>
  </div>
  <div class="li-box">
<?php $cat = array(
    'post-type' => 'post',
    'cat' => '15',
    'showposts' => '6'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<div class="list-read-more"><a href="https://www.dailytamilnadu.com/news/category/world/">மேலும் காண்க</a></div>
</section>

<section>
<div class="category-title">
    <h3>தொழில்நுட்பம்</h3>
  </div>
  <div class="li-box">
<?php $cat_tn = array(
    'post-type' => 'post',
    'cat' => '20',
    'showposts' => '6'
); 

$query = new WP_Query( $cat_tn ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<div class="list-read-more"><a href="https://www.dailytamilnadu.com/news/category/tech/">மேலும் காண்க</a></div>
</section>

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

<section>
<div class="category-title">
    <h3>சினிமா</h3>
  </div>
  <div class="li-box">
<?php $cat = array(
    'post-type' => 'post',
    'cat' => '19',
    'showposts' => '6'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<div class="list-read-more"><a href="https://www.dailytamilnadu.com/news/category/cinema/">மேலும் காண்க</a></div>
</section>

<section>
<div class="category-title">
    <h3>விளையாட்டு</h3>
  </div>
  <div class="li-box">
<?php $cat = array(
    'post-type' => 'post',
    'cat' => '172',
    'showposts' => '6'
); 

$query = new WP_Query( $cat ); ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>

  <div class="listbox-container">
    <div class="list-box">
    <img class="list-image" <?php the_post_thumbnail();?></img>
     <div class="list-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><div class="list-time"><?php the_time('M j, Y'); ?></div></div>
    </div>
    
  </div>

<?php endwhile; ?>
</div>
<div class="list-read-more"><a href="https://www.dailytamilnadu.com/news/category/sports/">மேலும் காண்க</a></div>
</section>
</div>
<?php get_footer(); ?>

