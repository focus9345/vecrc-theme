<?php
/**
 * @package VECRC
 */

?>
<footer class="footer">
<div class="container">
    <div class="row">
        <div class="col-sm">
            <span class="text-footer">
                Copyright &copy; 
                <?php echo date("Y"); ?> <br> 
                <?php bloginfo( 'name' ); ?> <br> 
                All Rights Reserved!
            </span>
            <?php
                    if ( is_active_sidebar( 'footer-widget-left' ) ) : ?>
                        <div id="footer-widget-left" class="fw-widget" role="complementary">
                        <?php dynamic_sidebar( 'footer-widget-left' ); ?>
                        </div>

                <?php endif; ?>
        </div>
        <div class="col-sm">
        <?php
                    if ( is_active_sidebar( 'footer-widget-center' ) ) : ?>
                        <div id="footer-widget-center" class="fw-widget" role="complementary">
                        <?php dynamic_sidebar( 'footer-widget-center' ); ?>
                        </div>

                <?php endif; ?>
        </div>  
        <div class="col-sm">
        <?php
                    if ( is_active_sidebar( 'footer-widget-right' ) ) : ?>
                        <div id="footer-widget-right" class="fw-widget" role="complementary">
                        <?php dynamic_sidebar( 'footer-widget-right' ); ?>
                        </div>

                <?php endif; ?>
        </div>
    </div>
            </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

