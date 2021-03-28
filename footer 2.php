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
                <?php echo date("Y"); ?> | 
                <?php bloginfo( 'name' ); ?> | 
                All Rights Reserved!
            </span>
        </div>
        <div class="col-sm">
            Footer Widget 1
            <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
            <div>
                <?php dynamic_sidebar( 'footer-widget-1' ); ?>
            </div>
            <?php endif; ?>
        </div>  
        <div class="col-sm">
            Footer Widget 2
        </div>
    </div>
            </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

