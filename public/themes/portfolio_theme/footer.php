</div>
<?php wp_footer(); ?>
<footer class="footer bg-dark text-white">
    <div class="footer-container">
        <img id="logo-small" src="<?=get_template_directory_uri();?>/assets/images/logo-A.png" alt="Aurinko Logo">
        <div class="footer-nav">
            <h4> <a href="mailto:danielsson.sandra@gmail.com" class="link-white"> <?php the_field('email', 'option'); ?></a> </h4>
            <a href="<?php the_field('github', 'option'); ?>" class="link-white"> <img src="<?=get_template_directory_uri();?>/assets/images/icons8-github-96.png" alt="Github" class="footer-icons"> </a>
            <a href="<?php the_field('linked', 'option'); ?>" class="link-white"> <img src="<?=get_template_directory_uri();?>/assets/images/icons8-linkedin-96.png" alt="LinkedIn" class="footer-icons"> </a>
            <a href="<?php the_field('insta', 'option'); ?>" class="link-white"> <img src="<?=get_template_directory_uri();?>/assets/images/icons8-instagram-96.png" alt="Instagram" class="footer-icons"> </a>
        </div>

        <div class="footer-item"> <!-- What Contact label ?? -->
            <?php if (get_field('contact_label', 'option')) : ?>
                <h4> <?php the_field('contact_label', 'option'); ?></h4> 
            <?php endif; ?>
        </div>

        <div class="row-3 footer-item">
            <p> <?php the_field('copyright_text', 'option'); ?> </p>
        </div>
    </div>

</footer>
</body>

</html>

<!--
    <a href="https://icons8.com/icon/16318/github">GitHub icon by Icons8</a>

<?=get_template_directory_uri();?>/assets/images/icons8-github-96.png"
-->