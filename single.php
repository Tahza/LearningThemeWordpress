<?php get_header(); ?>

<div class="page container" style="background-color: #f1f1f1;">
<div class="main single text-center" style="margin: auto;">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<h1 class="post-title"><?php the_title(); ?></h1>
<p class="post-info">
Posté le <strong><?php the_date(); ?></strong> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
</p>
<div class="post-content">
<?php the_content(); ?>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>