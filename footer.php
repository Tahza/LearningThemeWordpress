<footer>
    <div class="page container">
        <div class="row">
            <div class="col-md-4">
                <?php echo do_shortcode('[wpgmza id="1"]') ?>
            </div>
            <div class="col-md-4">
            <legend style="color: white;">Newsletter</legend>
                <?php echo do_shortcode('[wpforms id="90"]') ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar( 'home_right_1' ); ?>
            </div>
        </div>
    </div> <!-- /.page -->
</footer>
        <?php wp_footer(); ?>
    </body>
</html>