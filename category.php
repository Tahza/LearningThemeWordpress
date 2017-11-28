<?php get_header(); ?>
<div class="page">
<?php 
if (have_posts()):
    while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <div class="post-body">
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?>">Lire la suite</a> 
            </div>
        </article>
   
<?php endwhile;
endif;
 ?>
</div>
<?php get_footer();?>