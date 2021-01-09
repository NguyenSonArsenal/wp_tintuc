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
