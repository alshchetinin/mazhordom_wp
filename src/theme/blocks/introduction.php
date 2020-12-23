<?php
$title = get_field('title');
$description = get_field('description');


?>

<section class="introduction" id="introduction">
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
                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>8700</span></div>
                        <div class="introduction-item__text">
                        Количество активных пользователей 
                        </div>

                  </div>
                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>25</span></div>
                        <div class="introduction-item__text">
                        Количество подключенных домов 
                        </div>

                  </div>

                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>93</span>%</div>
                        <div class="introduction-item__text">
                        Жителей подключенного дома используют Мажордом
                        </div>

                  </div>
                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>4</span>.<span>7</span></div>
                        <div class="introduction-item__text">
                              Индекс удовлетворенности гарантийным обслуживанием
                        </div>

                  </div>

            </div>
      </div>
</section>