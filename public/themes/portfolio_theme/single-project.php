<?php get_header(); ?>

<div class="row">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>
                  <div class="col-lg-5 mt-2 mb-3">
                      <?php the_post_thumbnail('large'); ?>
                  </div>
                <?php endif; ?>

                    <!-- PROJECT INFO -->
                <div class="col-lg-7">
                    <h1><?php the_title(); ?></h1>

                        <!-- CLIENT INFO -->
                        <?php $website = get_field('project_client_website');
                            if (!empty($website)): ?>
                                <p>This project was built for: 
                                    <a href="<?php the_field('project_client_website'); ?>">
                                        <?php the_field('project_client'); ?>
                                    </a>
                                </p> 
                        <?php else: ?>
                            <p>This project was built for: <?php the_field('project_client'); ?></p> 
                        <?php endif; ?>
                    
                        <!-- TOOLS INFO -->
                    <?php $tools = get_the_terms( $post, 'tool'); ?>
                    <?php if ($tools): ?>
                        <p class="mb-0">
                            <?php foreach ($tools as $tool) : ?>
                                <a href="<?php echo get_term_link($tool) ?>"><?php echo $tool->name ?></a>
                            <?php endforeach; ?>
                        </p>
                    <?php endif; ?>

                    <div class="mt-3">
                        <?php the_content(); ?>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
</div><!-- /row -->

<?php get_footer(); ?>
