
<!-- begin footer -->
<?php
//if( cyberchimps_get_option( 'footer_show_toggle' ) == '1' ) {

    //do_action( 'cyberchimps_before_footer_widgets' ); ?>
<!-- 
    <div class="container-full-width" id="footer_section">
        <div class="container">
            <div class="container-fluid">
                <div id="footer-widgets" class="row-fluid">
                    <div id="footer-widget-container" class="span12">
                        <div class="row-fluid">
                            <?php //if( !dynamic_sidebar( 'cyberchimps-footer-widgets' ) ) : ?>
                                <aside class="widget-container span3">
                                    <h3 class="widget-title">Pages</h3>
                                    <ul>
                                        <?php //wp_list_pages( 'title_li=' ); ?>
                                    </ul>
                                </aside>

                                <aside class="widget-container span3">
                                    <h3 class="widget-title">Archives</h3>
                                    <ul>
                                        <?php //wp_get_archives( 'type=monthly' ); ?>
                                    </ul>
                                </aside>

                                <aside class="widget-container span3">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul>
                                        <?php //wp_list_categories( 'show_count=1&title_li=' ); ?>
                                    </ul>
                                </aside>

                                <aside class="widget-container span3">
                                    <h3 class="widget-title">WordPress</h3>
                                    <ul>
                                        <?php //wp_register(); ?>
                                        <li><?php //wp_loginout(); ?></li>
                                        <li><a href="http://wordpress.org/" target="_blank"
                                               title="Powered by WordPress, state-of-the-art semantic personal publishing platform."> WordPress</a>
                                        </li>
                                        <?php //wp_meta(); ?>
                                    </ul>
                                </aside>
                            <?php //endif; ?>
                        </div>
                        <!-- .row-fluid -->
                    </div>
                    <!-- #footer-widget-container -->
                </div>
                <!-- #footer-widgets .row-fluid  -->
            </div>
            <!-- .container-fluid-->
        </div>
        <!-- .container -->
    </div>    <!-- #footer_section -->
    