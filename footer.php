<?php
/**
 * @package VECRC
 */

?>

	</div><!-- #content -->
    </div><!-- .container-fluid -->
</div><!-- #page -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
            <span class="text-footer">
                Copyright &copy; <?php echo date("Y"); ?>  
                <?php bloginfo( 'name' ); ?>
                 All Rights Reserved!
            </span>
            </div>
            <div class="col-sm-3">
                <?php
                    if ( is_active_sidebar( 'footer-widget' ) ) : ?>
                        <div id="footer-widget-area" class="fw-widget widget-area" role="complementary">
                        <?php dynamic_sidebar( 'footer-widget' ); ?>
                        </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>