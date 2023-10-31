<?php
	/* 
	Template Name: Контакты
	*/
	get_header(); 
?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
        <?php
              $loop = CFS() -> get('city_loop');
              foreach ($loop as $row) {
            ?>
              <div class="contacts-block">
                <h2>
                  <?= $row['city_name']; ?>
                </h2>
                <div class="contacts-inner">
                  <div class="contacts-card">
                    <img src="<?= CFS() -> get('contacts_messege_icon'); ?>" alt="пишите">
                    <h3>
                      <?= CFS() -> get('contacts_messege'); ?>
                    </h3>
                    <p>
                      <?= $row['city_email']; ?>
                    </p>
                  </div>
                  <div class="contacts-card">
                    <img src="<?= CFS() -> get('contacts_call_icon'); ?>" alt="звоните">
                    <h3>
                      <?= CFS() -> get('contacts_call'); ?>
                    </h3>
                    <p>
                      <?= $row['city_phone']; ?>
                    </p>
                  </div>
                  <div class="contacts-card">
                    <img src="<?= CFS() -> get('contacts_come_icon'); ?>" alt="Приезжайте">
                    <h3>
                      <?= CFS() -> get('contacts_come'); ?>
                    </h3>
                    <p>
                      <?= $row['city_address']; ?>
                    </p>
                  </div>
                </div>
                <?= $row['city_map']; ?>
              </div>
            <?php
              }
            ?>
          
        </div>
          
        <div class="col-3 col-lg-12" id="cities">
          <h2>
            <?= CFS() -> get('dealers_title'); ?>
          </h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
            <?php
              $dilers_loop = CFS() -> get('dealers_loop');
              foreach ($dilers_loop as $diler) {
            ?>
            
              <li>
                <p class="city">
                  <?= $diler['dealers_address']; ?>
                </p>
              </li>

            <?php
              }
            ?>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
	<?php get_footer(); ?>