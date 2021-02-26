<?php get_header(); ?>


<div class="row">
    <div class="col-sm">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-8 col-xxl-9">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div> <!-- /col -->
    </div> <!-- /row -->

<?php endwhile; ?>
<?php endif; ?>
</div>
</div>


<?php get_footer(); ?>