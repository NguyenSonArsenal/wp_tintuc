<?php get_header() ?>
<div id="content">
    <div class="container" id="single-page">

        <?php include './includes/breadcrumbs.php'?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="post-news">
                    <?php if (have_posts()): ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php setPostView(get_the_ID()) ?>
                        <h1 class="single-title"><?php the_title() ?></h1>
                        <div class="meta">
                            <span>Ngày đăng: <?php echo get_the_date(); ?></span>
                            <span>Tác giả: <?php the_author(); ?></span>
                            <span>Chuyên mục: <?php the_category(', '); ?></span>
                            <span>Lượt xem: <?= getPostViews(get_the_ID()) ?> lượt</span>
                        </div>
                        <article class="post-content">
                            <?php the_content() ?>
                        </article>
                        <div class="tag">
                            <?php echo the_tags('Từ khóa: ') ?>
                        </div>
                        <div class="like">
                            <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                        </div>
                        <div class="comment">
                            <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>
                        </div>
                        <div class="postRelation">
                            <h3>Bài viết liên quan</h3>
                            <div class="postRelation__content">
                                <?php
                                $categories = get_the_category(get_the_ID());
                                if ($categories)
                                {
                                    $category_ids = array();
                                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                    $args=array(
                                        'category__in' => $category_ids,
                                        'post__not_in' => array(get_the_ID()),
                                        'showposts' => 5,
                                    );
                                    $my_query = new wp_query($args);
                                    if( $my_query->have_posts() )
                                    {
                                        while ($my_query->have_posts())
                                        {
                                            $my_query->the_post();
                                            ?>
                                            <div class="postRelation__item">
                                                <div class="new-img">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail(array(100, 100)); ?>
                                                    </a>
                                                </div>
                                                <div class="item-list">
                                                    <h4>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h4>
                                                    <div class="meta-list">
                                                        <span>Ngày đăng: <?= get_the_date() ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        echo '</ul>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <?php endif?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
