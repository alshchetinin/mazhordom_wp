<section id="contact">
      <div class="wrapper">
            <div class="row">
                  <div class="contact">
                        <h2 class="contact__title"><?php the_field('contact_title', 'option')?></h2>
                        <div class="contact__content">
                              <div class="contact__form">
                                    <p><?php the_field('form_name', 'option')?></p>
                                    <?php echo do_shortcode('[contact-form-7 id="18" title="Contact-form-footer"]') ?>
                                    <div class="contact__messenger">
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
                                    <small>Нажимая на кнопку, я соглашаюсь <a href="/policy">с политикой конфиденциальности</a></small>

                              </div>
                              <div class="contact__info">
                                    <div class="contact-item">
                                          <div class="contact-item__title">Адрес</div>
                                          <div class="contact-item__description"><?php the_field('adress', 'option')?></div>
                                    </div>

                                    <div class="contact-item">
                                          <div class="contact-item__title">Телефон</div>
                                          <div class="contact-item__description"><?php the_field('phone', 'option')?></div>
                                    </div>

                                    <div class="contact-download">
                                          <div class="contact-download__title">
                                                Скачайте приложение <br>для своего устройства
                                          </div>
                                          <div class="contact-download__href">
                                                <div class="contact-download__qr"><img src="<?php the_field('qr', 'option')?>" alt=""></div>
                                                <div class="contact-download__appstore"><a href="<?php the_field('linkApsstore', 'option')?>"><img src="<?php echo get_template_directory_uri() ?>/img/appstore.png" alt=""></a></div>
                                                <div class="contact-download__googleplay"><a href="<?php the_field('linkGP', 'option')?>"><img src="<?php echo get_template_directory_uri() ?>/img/googleplay.png" alt=""></a></div>
                                                <div class="contact-download__logo"><img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png" alt=""></div>

                                          </div>

                                    </div>


                              </div>

                        </div>

                  </div>
            </div>
      </div>
</section>

<footer id="footer">
      <div class="wrapper">
         <div class="row">
            <div class="footer">
               <div class="footer__logo">
               <?php 
					$image = get_field('logo', 'option');
					if( !empty( $image ) ): ?>
					<a href="/">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="180px" />
					</a>
						
					<?php endif; ?>
               </div>
               <div class="footer__nav">
               <?php wp_nav_menu([
						'container_class' => 'primary-menu'
				   ]); ?>
               </div>
               <div class="footer__phone">
                  <a href="tel:<?php the_field('phone', 'option')?>"><?php the_field('phone', 'option')?></a>
               </div>               
            </div>
         </div>
         <div class="row">
            <div class="footer__police"><a href="/policy">Политика конфиденциальности</a></div>                        
         </div>
      </div>
</footer>

<div id="form-popup" class="white-popup mfp-hide">
<div class="contact__form">
                                    <h3>Специалист перезвонит и проконсультирует вас</h3>
                                    <?php echo do_shortcode('[contact-form-7 id="18" title="Contact-form-footer"]') ?>
                                    <div class="contact__messenger">
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
                                    <small>Нажимая на кнопку, я соглашаюсь с политикой конфиденциальности</small>

                              </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
