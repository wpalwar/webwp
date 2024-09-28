<footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="container-fluid">
        <div class="widgetarea-wrapper d-flex">
            <div class="widgetarea widgetarea--socialconnect">
                <?php
                $socialheading = "Follow Us ";
                $facebookurl   = "#";
                $twitterurl    = "#";
                $youtubeurl    = "#";
                ?>

                <div class="widgetarea-title"><?php echo webwp__txt($socialheading); ?></div>
                <div class="widgetarea-block">
                    <?php
                    // Facebook
                    echo (! empty($facebookurl)) ? wp_sprintf('<a href="%s" target="_blank"><img width="28" height="28" src="%s" class="social-icon" alt="Facebook" /></a>', esc_url($facebookurl), esc_url(WEBWP_BASE . 'images/social-media/facebook.png')) . PHP_EOL : '' . PHP_EOL;
                    // Twitter
                    echo (! empty($twitterurl)) ? wp_sprintf('<a href="%s" target="_blank"><img width="28" height="28" src="%s" class="social-icon" alt="Twitter" /></a>', esc_url($twitterurl), esc_url(WEBWP_BASE . 'images/social-media/twitter.png')) . PHP_EOL : '' . PHP_EOL;
                    // YouTube
                    echo (! empty($youtubeurl)) ? wp_sprintf('<a href="%s" target="_blank"><img width="28" height="28" src="%s" class="social-icon" alt="YouTube" /></a>', esc_url($youtubeurl), esc_url(WEBWP_BASE . 'images/social-media/youtube.png')) . PHP_EOL : '' . PHP_EOL;
                    ?>
                </div>

            </div>
            <div class="widgetarea widgetarea--copyright">
                <div class="widgetarea-block">
                    <p>&copy; 2024</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>