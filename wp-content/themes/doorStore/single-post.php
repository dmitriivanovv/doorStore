<?php get_header(); ?>
  <!-- Страница одной двери -->
  <div class="door-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="door-gallery">
            <?php
              $gallary = CFS() -> get('gallery');
              foreach ($gallary as $photo) {
            ?>
            <a href="<?= $photo['gallery_photo']; ?>" data-caption="<?= $photo['gallery_description']; ?>">
              <img src="<?= $photo['gallery_photo']; ?>" alt="<?= $photo['gallery_title']; ?>">
            </a>
            <?php
              }
            ?>
          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2>
            <?php the_title();?>
            <span>
              <?php
                if (CFS() -> get('doors_stock')) {
                  echo CFS() -> get('doors_stock_true');
                } else {
                  echo CFS() -> get('doors_stock_false');
                } 
             ?> 
            </span>
          </h2>
          <!-- <h2>Название <span>Под заказ</span></h2> -->
          <?php the_content(); ?>
          <h3>
            <?= CFS() -> get('doors_price');?> 
            &#8381;
          </h3>
          <!-- форма -->
          <?= do_shortcode(CFS() -> get('doors_form_shortcode')); ?>
          
          <table>
            <caption><?= CFS() -> get('doors_property_title');?> </caption>
            <?php
              $propertys = CFS() -> get('doors_property');
              foreach ($propertys as $property) {
            ?>
              <tr>
                <td><?= $property['doors_key']; ?></td>
                <td><?= $property['doors_value']; ?></td>
              </tr>
            <?php
              }
            ?>
            
          </table>
          <a class="btn" href="/<?= CFS() -> get('info_slug');?>">
            <?= CFS() -> get('info_title');?>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>