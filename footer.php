<?php wp_footer(); ?>
<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
</div>
<footer class="icobalt ilayout" id="FooterZone">
    <div class="footer full" id="Footer">
        <?php
            wp_nav_menu([
            'menu'            => 'footer-menu',
            'theme_location'  => 'footer-menu',
            'container'       => 'div',
            'container_id'    => 'footer-navbarCollapse',
            'container_class' => 'footer-collapse footer-navbar-collapse',
            'menu_id'         => 'footer_menu',
            'menu_class'      => 'navbar-nav mr-auto',      
            ]);
        ?>
    </div>
    <div class="full-row">
        <div class="col-3">
            <img src="<?php echo $image[0]; ?>" alt="">
        </div>
        <div class="col-3 footer-desc">
            <h3>Office Location</h3>
            <p>19390 W 10 Mile Rd</p>
            <p>Southfield, MI 48075</p>
            <a href="https://tourmkr.com/F1J3rDXRyP/7627455p,2758329m,119.42h,89.91t" class="btn btn-link" target="_blank">Take an Office Tour</a>
        </div>
        <div class="col-3 footer-desc">
            <h3>Contact Us</h3>
            <p class="contact-item"><i class="fa fa-mobile fa-3x info-icon" aria-hidden="true"></i> 800.294.6637</p>
            <p class="contact-item"><i class="fa fa-phone fa-2x info-icon" aria-hidden="true"></i> 248.558.2315</p>
            <p class="contact-item"><i class="fa fa-building-o fa-2x info-icon" aria-hidden="true"></i> 248.355.5555</p>
            <p class="contact-item"><a href="https://www.google.com/maps/place/Fieger+Law/@42.473092,-83.2377427,17z/data=!3m1!4b1!4m5!3m4!1s0x8824c833e871ab4b:0xc29606a28c10a036!8m2!3d42.473092!4d-83.235554?ion=1&espv=2&q=Fieger+Law&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZ7sDUk-bSAhWIhFQKHT85A7kQ_AUICygE" target="_blank"><i class="fa fa-map fa-2x" aria-hidden="true"></i></a> 
            <a href="https://www.google.com/maps/place/Fieger+Law/@42.473092,-83.2377427,17z/data=!3m1!4b1!4m5!3m4!1s0x8824c833e871ab4b:0xc29606a28c10a036!8m2!3d42.473092!4d-83.235554?ion=1&espv=2&q=Fieger+Law&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZ7sDUk-bSAhWIhFQKHT85A7kQ_AUICygE" target="_blank">Map / Directions</a></p>
        </div>
        <div class="col-3 footer-desc">
            <ul class="social-media">
                <li><a href="#"><i class="fa fa-facebook squared-area fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter squared-area fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-square squared-area fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin squared-area fa-2x aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram squared-area fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="scorpion-footer" id="ScorpionFooter">
        <div class="main">
            <div class="box">
                <div class="disclaimer">
                    <small>The information on this website is for general information purposes only.
                        Nothing on this site should be taken as legal advice for any individual
                        case or situation. This information is not intended to create, and receipt
                        or viewing does not constitute, an attorney-client relationship.</small>
                </div>
                <div class="scorpion-logo">
                    <a href="https://www.scorpion.co/law-firms/" target="_blank"><img src="https://www.scorpion.co/images/client-footer-logos/scorpion-logo.png" alt="Scorpion Legal Internet Marketing" title="Scorpion Legal Internet Marketing"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>