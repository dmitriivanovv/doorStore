<?php
	/* 
	Template Name: Главная
	*/
	get_header(); 
?>
	<!-- Шапка -->
	<div class="header" style="background-image: url(<?= CFS() -> get('hero_bg') ?>)">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-12">
					<div class="header-inner">
						<div class="header-catalog">
							<h2>
								<?= CFS() -> get('catalog_title') ?>
							</h2>
							<div class="doors">
							<?php
								$catalog = CFS() -> get('catalog');
								foreach ($catalog as $row) {
							?>
								<div class="door">
									<div class="name" style="background-image: url(<?= $row['catalog_bg']; ?>)">
										<?= $row['catalog_text']; ?>
									</div>
								</div>
							<?php
								}
							?>
								
							</div>
							<a class="btn" href="/<?= CFS() -> get('catalog_btn')['url'] ?>">
								<?= CFS() -> get('catalog_btn')['text'] ?>
							</a>
						</div>
						<div class="header-order">
							<h2>
								<?= CFS() -> get('order_title') ?>
							</h2>
							<div class="doors">
							<?php
								$order = CFS() -> get('order');
								foreach ($order as $row) {
							?>
								<div class="door">
									<div class="name" style="background-image: url(<?= $row['order_bg']; ?>)">
										<?= $row['order_text']; ?>
									</div>
								</div>
							<?php
								}
							?>
							</div>
							<a class="btn" href="/<?= CFS() -> get('order_btn')['url'] ?>">
								<?= CFS() -> get('order_btn')['text'] ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_header('advantages'); ?>
	<!-- О нас -->
	<div class="about" style="background-image: url(<?= CFS() -> get('about_bg') ?>)">
		<div class="container">
			<div class="row about-inner">
				<div class="col-6 col-lg-12">
					<h2>
						<?= CFS() -> get('about_title') ?>
						<span>
							<?= CFS() -> get('about_title_green') ?>
						</span>
					</h2>
					<p>
						<?= CFS() -> get('about_text') ?>
					</p>
				</div>
				<div class="col-6 col-lg-12 text-center">
					<a href="/<?= CFS() -> get('about_btn')['url'] ?>" class="btn">
						<?= CFS() -> get('about_btn')['text'] ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Популярные товары -->
	<div class="popular" style="background-image: url(<?= CFS() -> get('popular_bg') ?>)">
		<div class="container">
			<div class="row popular-title">
				<h2>
					<?= CFS() -> get('popular_title') ?>
				</h2>
			</div>
			<div class="row popular-goods">
				<?php 
					$posts = get_posts( [
						'numberposts'   => 8,
						'category_name' => 'popular_doors',
						'orderby'       => 'title',
						'order'         => 'ASC',
						'post_type'     => 'post',
						'suppres_filter'=> true,
					] );
					foreach ($posts as $post) {
						setup_postdata( $post );
				?>
					<div class="col-3 col-lg-6 col-sm-12 product">
						<?php the_post_thumbnail( '' ); ?>
						<h3>
							<?php the_title(); ?>
						</h3>
						<div>
						<?= CFS() -> get('doors_price'); ?>
							 &#8381;
						</div>
						<a href="<?php the_permalink( ); ?>" class="btn">
							<?= CFS() -> get('doors_more'); ?>
						</a>
					</div>

				<?php
					}
					wp_reset_postdata(  );
				?>
				
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="<?= CFS() -> get('popular_btn')['url'] ?>" class="btn">
						<?= CFS() -> get('popular_btn')['text'] ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Форма обратной связи -->
	<div class="contacts" style="background-image: url(<?= CFS() -> get('callback_bg'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-4 col-lg-12 contacts-item">
					<h3>
						<?= CFS() -> get('callback_title'); ?>
					</h3>
					<p>
						<?= CFS() -> get('callback_subtitle'); ?>
					</p>
					<?= do_shortcode(CFS() -> get('callback_form_shortcode')); ?>
				</div>
				<?php
					$callback = CFS() -> get('callback_advantages');
					foreach ($callback as $card) {
				?>
					<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
						<img src="<?= $card['callback_advantages_icon']; ?>" alt="Подробно">
						<h3>
							<?= $card['callback_advantages_title']; ?>
						</h3>
						<p>
							<?= $card['callback_advantages_text']; ?>
						</p>
					</div>
				<?php
					}
				?>
				
				
			</div>
		</div>
	</div>

	<?php get_footer(); ?>