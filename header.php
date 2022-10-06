<!DOCTYPE html>
<html>

        <head>
            
        <?php wp_head();?>

        

</head>

<body <?php body_class();?>>


<header class="sticky-top">

<div class="container">

<div>
<?php if(is_active_sidebar('hero-sidebar')):?>

<?php dynamic_sidebar('hero-sidebar');?>

<?php endif;?>
</div>
</div>  

</header>

<div class="container-fluid">

<?php if(has_post_thumbnail()):?>


<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>>" class="img-fluid mb-3 img-thumbnail">
<?php endif;?>

</div>




