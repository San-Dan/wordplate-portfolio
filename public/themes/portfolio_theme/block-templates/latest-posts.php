<?php
/*
  * List the three latest blog posts
  */

$postType = get_field('latest_posts_post_type') ?: 'post';
$numberOfPosts = get_field('latest_posts_number_of_posts') ?: 3;
$archiveLink = get_field('latest_posts_link_to_archive') ?: null;
$linkLabel = get_field('latest_posts_link_label') ?: 'All Posts';

$latestPosts = get_posts([
    'post_type' => $postType,
    'numberposts' => $numberOfPosts,
    'order' => 'desc',
]);

global $post;

?>
<div class="latest-posts row mt-5 gx-5">
    <?php foreach ($latestPosts as $post) : setup_postdata($post);  ?>

        <div class="post col">
            <a href="<?php the_permalink(); ?>" id="post-img">
                <div class="image-wrapper">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <h3>
                    <?php the_title(); ?>
                </h3>
            </a>
        </div>

    <?php endforeach;
    wp_reset_postdata(); ?>
</div><!-- /row -->

<?php if (!empty($archiveLink)) : ?>
    <div class="row mt-5 mb-5">
        <div class="col text-end">
            <a class="btn btn-dark" href="<?= esc_url($archiveLink); ?>"><?= $linkLabel; ?></a>
        </div> <!-- /col -->
    </div><!-- /row -->
<?php endif; ?>
