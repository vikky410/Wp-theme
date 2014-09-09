<section class="usp mt100">

  <div class="container">

    <div class="row">

      <div class="col-sm-12">

        <h2 class="lined-heading"><span>OUR WORKING PROCESS</span></h2>

      </div>

      <?php query_posts('category_name=post&posts_per_page=4'); ?>

 <?php while (have_posts()) : the_post(); ?>

<div class="col-sm-3 " data-start="0">

      <div class="box-icon">

        <div class="circle"><i class="fa fa-glass fa-lg"></i></div>

        <h3><?php the_title(); ?></h3>

        <p><?php the_content(); ?></p>

        <a href="<?php the_permalink();?>">Read more<i class="fa fa-angle-right"></i></a> </div>

        </div>

<?php endwhile;?> 

    

    </div>

  </div>

</section>



<script type="text/javascript">$(document).ready(function(){$('#parallax-image').parallax("50%", -0.35);});</script>