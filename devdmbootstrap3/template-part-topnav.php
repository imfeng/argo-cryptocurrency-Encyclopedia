
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'?>" alt="Logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
            wp_nav_menu( array(
                    'theme_location'    => 'main_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>

        </div><!-- /.container-fluid -->
    </nav>
<?php endif; ?>