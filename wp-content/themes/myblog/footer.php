<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="block-footer">
					<h3>Về tôi</h3>
					<p>Tốt nghiệp ĐH Sư Phạm nhưng tôi lại thích lập trình và thiết kê web, vì vậy tôi tạo ra trang web
						này để
						trao đổi kiến thức về lập trình và thiết kế web</p>
					<a href="/lien-he" class="readmore">Xem thêm</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="block-footer">
					<h3>Chuyên mục</h3>
					<ul>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu1',
                                'container' => 'false',
                                'menu_id' => 'header-menu',
                                'menu_class' => 'header-menu',
                                'depth' => 1
                            )
                        ); ?>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="block-footer">
					<h3>Liên hệ</h3>
					<p>Điện thoại: 01658949680</p>
					<p>Email: huykira@gmail.com</p>
					<p>Lên hệ với tôi hay lick vào đây?</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Bản quyền thuộc về Huy Kira </p>
	</div>
</footer>
</div>
<script src="<?= assets('js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= assets('libs/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= assets('js/main.js') ?>"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=288092602373223&autoLogAppEvents=1"
		nonce="xRlW9CBK"></script>

<?php
wp_footer();
//	if (current_user_can('administrator')){
//		global $wpdb;
//		echo "<pre>";
//		print_r($wpdb->queries);
//		echo "</pre>";
//	}
?>

</body>
</html>
