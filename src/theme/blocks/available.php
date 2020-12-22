<?php
$title = get_field('title');
$description = get_field('description');
$what_title = get_field('what_title');
$uk_title = get_field('uk_title');
$price_title = get_field('price_title');
$form_title = get_field('form_title');


?>


<section class="available" id="available">
      <div class="wrapper">
            <div class="row">
                  <div class="headline-section">
                        <h2 class="headline-section__title">
                              <?php echo $title ?>
                        </h2>
                        <p><?php echo $description ?></p>
                  </div>
            </div>
            <div class="row">                  
                  <div class="features">
                        <h3 class="features__title"><?php echo $what_title ?></h3>
                        <?php while( have_rows('what_elements') ): the_row(); 

				// переменные
				$icon = get_sub_field('icon');
				$text = get_sub_field('tekst');
				?>
                        <div class="features__item">
                              
                              <img src="<?php echo $icon?>" alt="" class="features__icon">
                              
                              <p class="features__text"><?php echo $text ?></p>

                        </div>
				<?php endwhile; ?>
                  </div>
            </div>

            <div class="row">
                  <div class="features">
                        <h3 class="features__title"><?php echo $uk_title ?></h3>
                        <?php while( have_rows('uk_elements') ): the_row(); 

                        // переменные
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('tekst');
                        ?>
                        <div class="features__item">
                              
                              <img src="<?php echo $icon?>" alt="" class="features__icon">
                              
                              <p class="features__text"><?php echo $text ?></p>

                        </div>
                        <?php endwhile; ?>

                  </div>
            </div>
            <div class="row" id="price">
                  <div class="flats-price" >
                        <h3 class="flats-price__title"> <?php echo $price_title  ?></h3>
                        <?php while( have_rows('kvartiry') ): the_row(); 

                        // переменные
                        $title = get_sub_field('zagolovok');
                        $sq = get_sub_field('ploshhad');
                        $img = get_sub_field('kartinka');
                        $price = get_sub_field('czena');
                        ?>
                        <div class="flats-price-item">
                              <div class="flats-price-item__title"><?php echo $title ?></div>
                              <div class="flats-price-item__sq"><?php echo $sq ?> кв. м</div>
                              <div class="flats-price-item__pic">
                                    <img src="<?php echo $img ?>" alt="" class="img-responsive skip-lazy">
                              </div>
                              <div class="flats-price-item__price"><?php echo $price ?> р.</div>

                        </div>
                        <?php endwhile; ?>



                  </div>
            </div>
            <div class="row">
                  <div class="form-inline">
                        <h3 class="form-inline__title"> <?php echo $form_title ?></h3>
                        <div class="form-inline__form">

                              <?php echo do_shortcode('[contact-form-7 id="19" title="Phone-form"]') ?>

                              <div class="form-inline__mesenger">
                              <?php if (get_field('viber', 'option')) { ?>
                                          <a href="<?php the_field('viber', 'option'); ?>">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/vb.svg" alt="">
                                          </a>
                                    <?php } ?>
                                    <?php if (get_field('whatsapp', 'option')) { ?>

                                          <a href="<?php the_field('whatsapp', 'option'); ?>">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/ws.svg" alt="">
                                          </a>
                                    <?php } ?>

                                    <?php if (get_field('telegram', 'option')) { ?>
                                          <a href="<?php the_field('telegram', 'option'); ?>">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/tl.svg" alt="">
                                          </a>

                                    <?php } ?>
                              </div>
                              <small>Отправляя заявку, вы соглашаетесь на обработку персональных данных</small>
                        </div>

                  </div>
            </div>
      </div>
</section>