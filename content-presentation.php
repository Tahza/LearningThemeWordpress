<section>

    
    <?php
    if (have_posts()):
        while (have_posts()) : the_post(); 
        echo '<div class="text-center" style="width: 90%; margin: auto;">';
        echo '<h3 style="text-decoration: underline;">';
        the_title();
        echo '</h3>';
        echo '<hr>';
        echo '<div style="border: 1px solid black; border-radius: 5px; box-shadow: 6px 2px 2px grey; ">';
        the_content(); 
        echo '</div>';
        echo '<hr>';
        echo '</div>';
        endwhile;
      else:
        echo '<p>Sorry, no posts matched your criteria.</p>';
      endif;
        

    ?>
</section>