<?php
                        $title = get_field('title');
                        $description = get_field('description');
                        $buttonText = get_field('button-text');
                        $buttonLink = get_field('button-link');
                        $picture = get_field('picture');
                  
                  ?>

<div class="hero">
      <div class="hero__overlay hero__overlay_mobile"></div>
      <img src="<?php echo $picture ?>" alt="" class="hero__bg skip-lazy">
      <div class="wrapper">
            <div class="row">                  
                  <div class="hero__title">
                        <h1><?php echo $title?></h1>
                  </div>
                  <div class="hero__description">
                        <?php echo $description?>
                  </div>
                  <div class="hero__advantages">
                  <?php while( have_rows('hero-advantages') ): the_row(); 

                        // переменные
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('text');
                        ?>
                        <div class="advantage">
                              <div class="advantage__icon"><img class="skip-lazy" src="<?php echo $icon?>" alt="" width="37px"></div>
                              <div class="advantage__text"><?php echo $text?></div>

                        </div>					

                  <?php endwhile; ?>
                  </div>
                  <div class="hero__button">
                        <a href="<?php echo $buttonLink ?>" class="button button-primary button-big"><?php echo $buttonText?></a>
                  </div>
            </div>
      </div>
</div>