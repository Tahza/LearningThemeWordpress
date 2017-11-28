<section>

    <!-- Actualités de la page d'Accueil -->

    <?php
        the_content();
        $args = array(
            'post_type'     => 'accueil-news',
            'orderby'       => 'rand',
            'post_per_page' => 1
        );

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) :
            while( $loop->have_posts() ) :
                $loop->the_post();
                global $post;

                echo '<aside>';
                echo    get_the_post_thumbnail( $id, 'accueil-size');
                echo '</aside>';

                echo '<article>';
                echo    '<h3>' . get_the_title() . '</h3>';
                echo    the_content();    
                echo '</article>';

            endwhile;
        endif;
        

    ?>

    <aside>
                    
    </aside>

    <article>
        <h3></h3>
                    
    </article>

    <!-- PARTENAIRES -->
    <div class="partenaires">
        <h3 style="text-align: center; font-size: 2em;">Nos partenaires</h3>
        <?php echo do_shortcode('[logoshowcase image_size="original" dots="false" arrows="false" slides_scroll="4" center_mode="true" slides_column="3"]'); ?>            
    </div> <!-- /.partenaires -->
</section>