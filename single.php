<?php get_header();?>



<div class="container pt-5 pb-5">

<?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb3 img-thumbnail">
        <?php endif;?>

        <?php get_tempate_part('includes/section','content');?>


<h1><?php the_title();?></h>


<?php if (have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>


<?php endwhile; endif;?>

</div>


<?php get_footer();?>


