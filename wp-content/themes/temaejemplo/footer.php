
    </main>
    <footer>
        <div class="contact-footer">
            <div class="logo-footer">
            <?php the_custom_logo();?>
                <p>Lima, Peru</p>
            </div>
            <div class="contact-info">
                <div>info@limanorthchamber.com</div>
                <div>+(51) 950529503</div>
                <div><a href="#"><i class="fa-solid fa-location-dot"></i> Location Map</a></div>
            </div>
        </div>
        <p>&#169; <span id="year"></span> Lima North Chamber | <strong>Luis Castillo</strong> | WDD 230 Project | <span
                id="lastmodification"></span></p>
                <?php dynamic_sidebar('sub-footer'); ?>
    </footer>
    <?php wp_footer();?>
</body>

</html>