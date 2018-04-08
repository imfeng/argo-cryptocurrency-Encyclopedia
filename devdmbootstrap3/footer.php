<!--     <div class="dmbs-footer">
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="row dmbs-author-credits">
                    <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by','devdmbootstrap3') ?> Danny Machal</a></p>
                </div>
        <?php endif; ?>

        <?php get_template_part('template-part', 'footernav'); ?>
    </div>
</div>
end main container -->

<!--Footer-->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">

                <div class="col-md-6 col-sm-6 col-xs-12">
                 <!--  <div class="footer-brand">
                        <img src="assets/images/logo.png" alt="logo" />
                    </div>-->
                </div> 

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>Made with <i class="fa fa-bitcoin"></i> by <a target="_blank" href="https://www.facebook.com/zchinwee"> 阿爾戈創新創業團隊 </a>2018. All rights reserved.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri() . '/assets/js/plugins.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/modernizr.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/particles.min'; ?>.js"></script>
</body>
</html>