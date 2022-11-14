<header>
        <div class="responsive-width">
            <div class="first-col">
                <div class="logo">
                    <?php the_custom_logo();?>
                </div>
                <div class="mobile-header">
                    <div class="social-mobile">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <div id="hamburguer">
                        <i class="fa-solid fa-bars"></i>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="date-mobile"></div>
                    <p class="wlc"><?php do_action('wlcm')?></p>
                </div>
            </div>
            <?php wp_nav_menu(
                [
                    'menu'=>'main-menu',
                    'menu_id'=>'menu',
                    'container'=>'nav'
                ]
            );?>
            <!-- <nav id="menu">
                <div><a href='<?php echo home_url();?>'>Home</a></div>
                <div><a href="discover.html">Discover</a></div>
                <div><a href="directory.html">Directory</a></div>
                <div><a href="join.html">Join</a></div>
                <div><a href="contact.html">Contact</a></div>
            </nav> -->
            <div class="social-large">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <div class="date-large"></div>
                <p class="wlc-2"><?php do_action('wlcm')?></p>
            </div>

        </div>

</header>