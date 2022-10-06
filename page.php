<?php get_header();?>


<div class="container">

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>


    <?php endwhile; endif;?>

</div>

<div class="container pt-5 pb-5">
<?php if(is_active_sidebar('page-sidebar')):?>

<?php dynamic_sidebar('page-sidebar');?>

<?php endif;?>
</div>
 

<?php get_footer();?>