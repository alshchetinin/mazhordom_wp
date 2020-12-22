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
                              <!-- <img src="<?php echo $img ?>" alt="" class="img-responsive"> -->
                        </div>

                        <?php endwhile; ?>
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
                  <?php endwhile; ?>                        

                  
                  </div>

            </div>
      </div>

</section>