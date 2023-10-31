<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<title>
    <?php 
      if(is_404()) {
        echo 'Ошибка 404';
      } elseif(is_category( 'doors' )){
				echo single_cat_title();
			}else {
        the_title();
      }
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>
	<!-- Меню -->
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="<?= home_url(); ?>">
						<!-- <img src="img/logo.png" alt="логотип"> -->
            <?php the_custom_logo(); ?>
					</a>
				</div>
				<!-- <ul>
					<li><a href="index.html">Главная</a></li>
					<li><a href="about.html">О компании</a></li>
					<li><a href="catalog.html">Каталог</a></li>
					<li><a href="order.html">На заказ</a></li>
					<li><a href="portfolio.html">Наши работы</a></li>
					<li><a href="contacts.html">Контакты</a></li>
				</ul> -->
        <?php
          wp_nav_menu( [
            'theme_location'  => 'top',
            'container'       => '',
            'menu_class'      => '',
            'menu_id'         => '',
          ] );
        ?>
				<div class="phone">
				<?php 
					$settimgs = get_posts([
						'numberposts'   => 1,
						'category_name' => 'settings',
						'post_type'     => 'post',
					]);
					foreach($settimgs as $post) {
						setup_postdata( $post );
				?>
					<a href="tel:<?= CFS() ->get('header_phone')['url']; ?>">
						&#9742;&#xFE0E; <?= CFS() ->get('header_phone')['text']; ?>
					</a>
					
				<?php
					}
					wp_reset_postdata(  );
				?>
					
				</div>
			</div>
		</div>
	</div>