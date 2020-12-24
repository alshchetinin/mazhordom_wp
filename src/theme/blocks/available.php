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
                              
                              <img class="features__icon" src="<?php echo $icon?>" alt="" class="features__icon">
                              
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
                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzE3IiBoZWlnaHQ9IjMyNiIgdmlld0JveD0iMCAwIDMxNyAzMjYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIG9wYWNpdHk9IjAuMDQiIGQ9Ik0xMzUuNDAyIDI3NC45OTNMODcuNzYyMSAxMTQuOTcySDg2LjY1NDJDODYuODM4OCAxMTguNzgyIDg3LjExNTggMTI0LjQ5NyA4Ny40ODUxIDEzMi4xMTdDODcuODU0NCAxMzkuNzM3IDg4LjIyMzcgMTQ3LjkyOSA4OC41OTMgMTU2LjY5MkM4OC45NjIzIDE2NS4yNjQgODkuMTQ3IDE3My4wNzUgODkuMTQ3IDE4MC4xMjNWMjc0Ljk5M0g1MS43NTUxVjcwLjk2NkgxMDguODEyTDE1NS42MjEgMjI2Ljk4N0gxNTYuNDUyTDIwNi4wMzEgNzAuOTY2SDI2My4wODhWMjc0Ljk5M0gyMjQuMDM1VjE3OC40MDlDMjI0LjAzNSAxNzEuOTMyIDIyNC4xMjcgMTY0LjUwMiAyMjQuMzEyIDE1Ni4xMkMyMjQuNjgxIDE0Ny43MzggMjI0Ljk1OCAxMzkuODMyIDIyNS4xNDMgMTMyLjQwM0MyMjUuNTEyIDEyNC43ODMgMjI1Ljc4OSAxMTkuMDY4IDIyNS45NzQgMTE1LjI1OEgyMjQuODY2TDE3My45MDIgMjc0Ljk5M0gxMzUuNDAyWiIgZmlsbD0iYmxhY2siLz4KPC9zdmc+Cg==" data-src="<?php echo $img ?>" alt="" class="img-responsive lazy">
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