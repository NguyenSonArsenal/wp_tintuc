<?php get_header(); ?>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">

                <div class="post-news">
                    <h1 class="title-news">Kết quả tìm kiếm</h1>
                    <div class="content-news">
                        <!-- Get post mặt định -->
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="news-detail">
                                    <a href="<?php the_permalink() ?>">
                                        <?= get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'thumnail']) ?>
                                    </a>
                                    <div class="info-post">
                                        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: <?php echo get_the_date() ?></span>
                                        </div>
                                        <?php the_excerpt() ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            <?php endwhile; else : ?>
                            <p>Hiện tại chưa có bài viết nào, vui lòng thêm bài viết để hiển thị</p>
                        <?php endif; ?>
                        <!-- Get post mặt định -->
                    </div>

                    <!-- Pagination -->
                    <?php if(paginate_links()!='') {?>
                        <div class="quatrang">
                            <?php
                            global $wp_query;
                            $big = 999999999;
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'prev_text'    => __('«'),
                                'next_text'    => __('»'),
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages
                            ) );
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
