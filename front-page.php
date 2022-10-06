<?php get_header();?>






<div class="container pt-5 pb-5">





    <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>


    <?php endwhile; endif;?>

</div>



<div class="container pt-3 pb-3">
<?php if(is_active_sidebar('page-sidebar')):?>

<?php dynamic_sidebar('page-sidebar');?>

<?php endif;?>
</div>

<div class="container pt-3 pb-3">
<?php if(is_active_sidebar('header1-sidebar')):?>

<?php dynamic_sidebar('header1-sidebar');?>

<?php endif;?>
</div>

<div class="container pt-3 pb-3">
<?php if(is_active_sidebar('blog-sidebar')):?>

<?php dynamic_sidebar('blog-sidebar');?>

<?php endif;?>

</div>


<div class="container pt-0 pb-0">
<?php if(is_active_sidebar('lab1-sidebar')):?>

<?php dynamic_sidebar('lab1-sidebar');?>

<?php endif;?>

</div>


<div class="container">
<?php if(is_active_sidebar('lab2-sidebar')):?>

<?php dynamic_sidebar('lab2-sidebar');?>

<?php endif;?>

</div>


<div class="container pt-0 pb-0">
<?php if(is_active_sidebar('lab3-sidebar')):?>

<?php dynamic_sidebar('lab3-sidebar');?>

<?php endif;?>

</div>

<hero class= "container">
<div class="container pt-5 pb-3">
<?php if(is_active_sidebar('lab4-sidebar')):?>

<?php dynamic_sidebar('lab4-sidebar');?>

<?php endif;?>

</div>

<div class="container pt-3 pb-3">
<?php if(is_active_sidebar('sec2-sidebar')):?>

<?php dynamic_sidebar('sec2-sidebar');?>

<?php endif;?>
</div>

<div class="container pt-0 pb-0">
<?php if(is_active_sidebar('lab5-sidebar')):?>

<?php dynamic_sidebar('lab5-sidebar');?>

<?php endif;?>

</div>

<div class="container pt-0 pb-0">
<?php if(is_active_sidebar('lab6-sidebar')):?>

<?php dynamic_sidebar('lab6-sidebar');?>

<?php endif;?>

</div>

</hero>


<div class="container pt-5 pb-5">
<?php if(is_active_sidebar('sec3-sidebar')):?>

<?php dynamic_sidebar('sec3-sidebar');?>

<?php endif;?>
</div>

<div>
<?php if(is_active_sidebar('sec4-sidebar')):?>

<?php dynamic_sidebar('sec4-sidebar');?>

<?php endif;?>
</div>


<div>
<?php if(is_active_sidebar('lab7-sidebar')):?>

<?php dynamic_sidebar('lab7-sidebar');?>

<?php endif;?>
</div>

<div>
<?php if(is_active_sidebar('lab8-sidebar')):?>

<?php dynamic_sidebar('lab8-sidebar');?>

<?php endif;?>
</div>










<?php get_footer();?>