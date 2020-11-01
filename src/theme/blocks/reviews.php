<?php
$title = get_field('title');
$description = get_field('description');


?>
<section class="reviews" id="reviews">
      <div class="wrapper">
            <div class="row">
                  <div class="headline-section">
                        <h2 class="headline-section__title">
                              <?php echo $title ?>
                        </h2>

                  </div>
            </div>
            <div class="row">


            <?php while( have_rows('reviews')): the_row(); 

				// переменные
				$title = get_sub_field('zagolovok');
                        $name = get_sub_field('name');
                        $company = get_sub_field('kompaniya');
                        $poster = get_sub_field('poster');
                        $video = get_sub_field('video');
                        ?>
                        
                        <div class="review-stories">
                              <div class="review-stories__top">
                                    <div class="review-stories__el"><svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.92 8.96C6.08 8.90667 6.34667 8.88 6.72 8.88C7.94667 8.88 9.01333 9.36 9.92 10.32C10.8267 11.28 11.28 12.4267 11.28 13.76C11.28 15.2 10.7733 16.4267 9.76 17.44C8.74667 18.4 7.46667 18.88 5.92 18.88C4.21333 18.88 2.8 18.2933 1.68 17.12C0.56 15.8933 0 14.1867 0 12C0 9.49334 0.746667 7.17334 2.24 5.04C3.73333 2.85333 5.46667 1.17333 7.44 0L11.2 3.6C8.21333 5.2 6.45333 6.98667 5.92 8.96ZM20.32 8.96C20.48 8.90667 20.7467 8.88 21.12 8.88C22.3467 8.88 23.4133 9.36 24.32 10.32C25.2267 11.28 25.68 12.4267 25.68 13.76C25.68 15.2 25.1733 16.4267 24.16 17.44C23.1467 18.4 21.8667 18.88 20.32 18.88C18.6133 18.88 17.2 18.2933 16.08 17.12C14.96 15.8933 14.4 14.1867 14.4 12C14.4 9.49334 15.1467 7.17334 16.64 5.04C18.1333 2.85333 19.8667 1.17333 21.84 0L25.6 3.6C22.6133 5.2 20.8533 6.98667 20.32 8.96Z" fill="white" />
                                          </svg></div>
                                    <div class="review-stories__title"><?php echo $title ?></div>
                                    <div class="review-stories__name"><?php echo $name ?></div>
                                    <div class="review-stories__company"><?php echo $company ?></div>
                              </div>
                              <div class="review-stories__bottom">
                                    <div class="review-stories__play"><img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt=""></div>
                                    <div class="review-stories__pause"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pause.svg" alt=""></div>
                              </div>
                              <div class="review-stories__overlay"></div>
                              <video playsinline preload="auto" poster="<?php echo $poster ?>" class="img-responsive">
                                    <source src="<?php echo $video ?>" type="video/mp4">
                              </video>
                        </div>


				<?php endwhile; ?>
            </div>
      </div>
</section>