<?php
$title = get_field('title');
$description = get_field('description');


?>

<section class="cases" id="cases">
      <div class="wrapper">
            <div class="row">
                  <div class="headline-section">
                        <h2 class="headline-section__title">
                              <?php echo $title ?>
                        </h2>

                  </div>
            </div>
      </div>

      <?php while (have_rows('cases')) : the_row();

            // переменные
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $leghtflat = get_sub_field('leght-flat');
            $sqflat = get_sub_field('sq-flat');
      ?>
            <div class="case">
                  <div class="wrapper">
                        <div class="row">
                              <div class="case__text">
                                    <div class="case__title"><?php echo $title ?></div>
                                    <div class="case__description"><?php echo $description ?>
                                    </div>
                                    <div class="case__advantage">

                                          <?php while (have_rows('icons')) : the_row();

                                                // переменные
                                                $icon = get_sub_field('icon');
                                                $text = get_sub_field('text');
                                          ?>
                                                <div class="advantage">
                                                      <div class="advantage__icon"><img src="<?php echo $icon ?>" alt="" width="37px"></div>
                                                      <div class="advantage__text"><?php echo $text ?></div>

                                                </div>

                                          <?php endwhile; ?>
                                    </div>
                                    <div class="case__number">
                                          <div class="case-number-item">
                                                <div class="case-number-item__title">Количество квартир</div>
                                                <div class="case-number-item__number"><?php echo $leghtflat ?></div>
                                          </div>
                                          <div class="case-number-item">
                                                <div class="case-number-item__title">Площадь квартир</div>
                                                <div class="case-number-item__number"><?php echo $sqflat ?>кв.м</div>
                                          </div>
                                    </div>
                                    <div class="slider-wrapper_mobile">
                                    <div class="case-slider-arrows case-slider-arrows_mobile">
                                          <div class="case-slider-arrows__left">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-left.svg" alt="">
                                          </div>
                                          <div class="case-slider-arrows__right">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
                                          </div>

                                    </div>
                                    <div class="case-slider case-slider_mobile">
                                          <?php
                                          $images = get_sub_field('foto');
                                          if ($images) : ?>
                                                <?php foreach ($images as $image) : ?>
                                                      <div class="case-slider__item">
                                                <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                      </div>
                                                <?php endforeach; ?>
                                          <?php endif; ?>
                                    </div>
                                    </div>

                              </div>

                        </div>
                  </div>
                  <div class="case-slider-arrows">
                        <div class="case-slider-arrows__left">
                              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-left.svg" alt="">
                        </div>
                        <div class="case-slider-arrows__right">
                              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
                        </div>

                  </div>
                  <div class="case-slider-wrapper">
                        <div class="case-slider case-slider_desctop">
                              <?php
                              $images = get_sub_field('foto');
                              if ($images) : ?>
                                    <?php foreach ($images as $image) : ?>
                                          <div class="case-slider__item">
                                                <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                          </div>

                                    <?php endforeach; ?>
                              <?php endif; ?>
                        </div>
                  </div>

            </div>
      <?php endwhile; ?>





</section>