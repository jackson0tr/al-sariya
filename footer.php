<footer class="footer">
    <div class="container footer-container">

        <!-- COLUMN 1 -->
        <div class="footer-col">
            <h2 class="logo">AL-SARIYAH<br>GROUP</h2>

            <p class="footer-desc">
                Powering Progress.<br>
                Delivering Excellence
            </p>

            <p class="footer-year">Since 2004 – IRAQ</p>

            <div class="social-icons">
                <a href="#">LinkedIn</a>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Telegram</a>
            </div>
        </div>

        <!-- COLUMN 2 -->
        <div class="footer-col">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li><a href="<?php echo home_url('/about-al-sariyah-group'); ?>">About Us</a></li>
                <li><a href="<?php echo home_url('/our-projects'); ?>">Projects</a></li>
                <li><a href="<?php echo home_url('/our-services'); ?>">Services</a></li>
                <li><a href="<?php echo home_url('/contact-us'); ?>">Contact</a></li>
            </ul>
        </div>

        <!-- COLUMN 3 -->
        <div class="footer-col">
            <h3>Services</h3>
            <ul>
                <li>Oil, Gas & Petrochemicals</li>
                <li>Power & Energy</li>
                <li>Infrastructure & Civil Development</li>
                <li>Industrial & Utilities</li>
            </ul>
        </div>

        <!-- COLUMN 4 -->
        <div class="footer-col">
            <h3>Contact Info</h3>
            <p>Baghdad, Iraq</p>

            <p>
                +964 770 013 1213<br>
                +964 790 175 4808
            </p>

            <p>
                info@alsariyagroup.com
            </p>

            <p>
                hr@alsariyagroup.com
            </p>
        </div>

        <!-- COLUMN 5 -->
        <div class="footer-col footer-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iso.png" alt="ISO">
        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom">
        <p>
            © 2030 AL-SARIYAH GROUP FOR GENERAL TRADING & CONTRACTING L.L.C. All rights reserved
        </p>

        <div class="footer-policies">
            <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
            <a href="<?php echo home_url('/quality-policy'); ?>">Quality Policy</a>
            <a href="<?php echo home_url('/hse-policy'); ?>">HSE Policy</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>