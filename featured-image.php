<section class="rooms mt50">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="lined-heading"><span>Our Services</span></h2>
      </div>
     <?php query_posts('category_name=service&posts_per_page=3'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <div class="col-sm-4">
        <div class="room-thumb"> <?php the_post_thumbnail(); ?>
          <div class="mask">
            <div class="main">
              <h5><?php the_title();?></h5>
             
            </div>
            <div class="content">
              <p><span><?php the_content(); ?></span></p>
              
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
          </div>
        </div>
      </div>
<?php endwhile;?> 
    
    </div>
  </div>
</section>