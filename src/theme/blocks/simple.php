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
                              $svg = get_sub_field('img')                            
                        ?>
                        <div class="simple-item">
                              <div class="simple-item__content">
                                    <div class="simple-item__icon"><?php echo $svg ?></div>
                                    <div class="simple-item__title"><?php echo $title ?></div>                                    
                              </div>                                                    
                        </div>

                        <?php endwhile; ?>
                  </div>
            </div>
      </div>

</section>