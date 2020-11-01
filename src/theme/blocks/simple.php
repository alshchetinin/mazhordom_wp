<?php
$title = get_field('title');
$description = get_field('description');


?>

<section id="simple">
      <div class="wrapper">
            <div class="row">
                  <div class="headline-section">
                        <h2 class="headline-section__title">
                              <?php echo $title ?>
                        </h2>
                        <p><?php echo $description ?></p>
                  </div>
            </div>
      </div>
      <div class="simple">
            <div class="wrapper">
                  <div class="row">
                        <?php while (have_rows('simple-repeater')) : the_row();

                              // переменные
                              $title = get_sub_field('title');  
                              $img = get_sub_field('img')                            
                        ?>
                        <div class="simple-text" data-image="<?php echo $img ?>">
                              <div class="simple-text__line_amnimation"></div>
                              <div class="simple-text__line"></div>
                              <div class="simple-text__number"><span><?php echo get_row_index(); ?></span></div>
                              <h3 class="simple-text__title"><?php echo $title?></h3>
                              <img src="" alt="" class="img-responsive">
                        </div>

                        <?php endwhile; ?>

<!-- 
                        <div class="simple-text">
                              <div class="simple-text__line_amnimation"></div>
                              <div class="simple-text__line"></div>
                              <div class="simple-text__number"><span>2</span></div>
                              <h3 class="simple-text__title">Поставляем настроенное оборудование</h3>
                              <img src="" alt="" class="img-responsive">
                        </div>

                        <div class="simple-text">
                              <div class="simple-text__line_amnimation"></div>
                              <div class="simple-text__line"></div>
                              <div class="simple-text__number"><span>3</span></div>
                              <h3 class="simple-text__title">Проводим шеф-монтаж и авторский надзор</h3>
                              <img src="" alt="" class="img-responsive">
                        </div>

                        <div class="simple-text">
                              <div class="simple-text__line_amnimation"></div>
                              <div class="simple-text__line"></div>
                              <div class="simple-text__number"><span>4</span></div>
                              <h3 class="simple-text__title">Обучаем ваших сотрудников</h3>
                              <img src="" alt="" class="img-responsive">
                        </div>

                        <div class="simple-text">
                              <div class="simple-text__line_amnimation"></div>
                              <div class="simple-text__line"></div>
                              <div class="simple-text__number"><span>5</span></div>
                              <h3 class="simple-text__title">Бесплатная техническая поддержка и гарантийное сопровождение </h3>
                              <img src="" alt="" class="img-responsive">
                        </div> -->

                  </div>
            </div>
            <div class="simple-image">
                  <div class="simple-image__sticky">                  
                  <?php while (have_rows('simple-repeater')) : the_row();

                  // переменные
                  $img = get_sub_field('img');    
                                            
                  ?>
                  <?php ?>
                  <div class="simple-image__pic" style="background-image: url(<?php echo $img?>)"></div>
                  <?php break;  ?>
                  <?php endwhile; ?>                        

                  
                  </div>

            </div>
      </div>

</section>