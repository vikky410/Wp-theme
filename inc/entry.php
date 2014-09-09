<?php $i = 1; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if ($i==1) get_template_part('includes/breadcrumbs'); ?>


<?php endwhile; ?>
<?php endif; ?>