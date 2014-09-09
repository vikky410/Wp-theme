
<div class="container">
  <div class="row"> 
    <!-- Blog -->
    <section class="blog mt50">
      <div class="col-md-9"> 
        <!-- Article -->
        <article>
          
          <div class="row">
            
            
            <div class="col-md-12">
              <p> <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post">
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
 <div class="entry">
   <?php the_content(); ?>
 </div>
 </div>
 <?php endwhile; else: ?>


 
 <p>Sorry, no posts matched your criteria.</p>


 
 <?php endif; ?>
       </p>
            </div>
          </div>
        </article>
        
        <!-- Blog: Author -->
        
        
        <!-- Blog: Comments -->
       
      </div>
    </section><?php get_sidebar( ); ?>
    
    <!-- Aside -->
    <aside class="mt50">
       <div class="col-md-3"> 
       
       </div>
    </aside>
  </div>
</div>