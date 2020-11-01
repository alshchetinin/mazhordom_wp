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
                        <div class="introduction-item__number"><span>90</span>%</div>
                        <div class="introduction-item__text">
                              Процент проданных квартир к моменту ввода в эксплуатацию
                        </div>

                  </div>
                  <div class="introduction-item">
                        <div class="introduction-item__number">×<span>2</span></div>
                        <div class="introduction-item__text">
                              Рост объема продаж квартир по сравнению с остальными объектами
                        </div>

                  </div>

                  <div class="introduction-item">
                        <div class="introduction-item__number"><span>10</span>%</div>
                        <div class="introduction-item__text">
                              Процент увеличения премии к рынку
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