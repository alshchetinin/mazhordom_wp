<?php
$title = get_field('title');
$description = get_field('description');


?>


<section class="profitable" id="profitable">
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
                  <?php while (have_rows('profitable-items')) : the_row();

                        // переменные
                        $symoblR = get_sub_field('symbolR');
                        $symoblL = get_sub_field('symbolL');
                        $number = get_sub_field('number');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $linkName = get_sub_field('linkName');
                        $linkHref = get_sub_field('linkHref');
                  ?>
                        <div class="profitable-item">
                              <div class="profitable-item__number"><?php echo $symoblL ?><span><?php echo $number ?></span><?php echo $symoblR ?></div>
                              <h3 class="profitable-item__title"><?php echo $title ?></h3>
                              <div class="profitable-item__text"><?php echo $text ?></div>
                              <div class="profitable-item__link">
                                    <a href="<?php echo $linkHref ?>"><?php echo $linkName ?></a>
                              </div>
                        </div>

                  <?php endwhile; ?>

            </div>
      </div>
</section>