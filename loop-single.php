 
 <?php if (have_posts()) : ?>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
 <section class="parallax-effect">
 
   
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
            </ol>
            <h1> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          </div>
           
        </div>
      </div>
   
 
</section>
 
  <?php the_content(); ?>
  <div style="clear:both"></div>
  <?php endwhile; ?>
  <?php else : ?>
  <h2 class="center">Not Found</h2>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
  <?php get_search_form(); ?>
  <?php endif; ?>
</div>
 
 
 
 
 
     