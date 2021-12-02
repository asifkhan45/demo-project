<?php get_header();
?>
<div class="container">
  <?php 
  $query = new WP_Query(array(
    'post_type' => 'testimonial',
    'post_status' => 'publish'
  ));
  
  
  while ($query->have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();
    $title = get_the_title();
    $desc = get_the_content();
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
    echo '<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-4">
            <div><img src="'.$url.'" alt="" width="100%" height="100%"></div>
            </div>
            <div class="col-md-8"> <h1 class="display-5 fw-bold">'.$title.'</h1>
              <p class="fs-4">'.$desc.'</p></div>
          </div> 
    </div>
</div>';
  }
  wp_reset_query();
  ?>
  
</div>
<?php get_footer();?>