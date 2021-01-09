<div class="noibat">
    <h2 class="title-news">Bài viết nổi bật</h2>

    <!-- Get bài viết nổi bật nhất -->
    <?php
    $args = array(
        'post_status' => 'publish',
        'showposts' => 1,
        'cat' => 1, // category id
    );
    ?>
    <?php $hostest = new WP_query($args); ?>
    <?php global $wp_query;
    $wp_query->in_the_loop = true; ?>
    <?php while ($hostest->have_posts()) : $hostest->the_post(); ?>
        <div class="content-nb">
            <a href="<?php the_permalink() ?>">
                <?= get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'thumnail']) ?>
            </a>
            <h4><a href="#"><?php the_title() ?></a></h4>
            <div class="meta">
                <span>Ngày đăng: <?php get_the_date() ?></span>
                <span>Lượt xem: 2344 Lượt</span>
            </div>
            <?php the_excerpt() ?>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>

    <!-- Get 3 bài viết nổi bật khác -->
    <?php
    $args2 = array(
        'post_status' => 'publish',
        'showposts' => 3,
        'offset' => 1, // Remove first post
        'cat' => 1, // category id
    );
    ?>
    <?php $hot2 = new WP_query($args2); ?>
    <?php global $wp_query;
    $wp_query->in_the_loop = true; ?>

    <div class="list-nb">
        <div class="row">
            <?php while ($hot2->have_posts()) : $hot2->the_post(); ?>
                <div class="col-xs-4 col-sm-4 col-md-4 style-box">
                    <div class="list-post">
                        <a href="<?php the_permalink() ?>">
                            <?= get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'thumnail', 'style' => 'height: 150px']) ?>
                        </a>
                        <h4>
                            <a href="#"><?php the_title() ?></a>
                        </h4>
                        <div class="meta">
                            <span>Ngày đăng: <?php get_the_date() ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
