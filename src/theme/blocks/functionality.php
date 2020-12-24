<?php
$title = get_field('title');
$description = get_field('description');
?>
<section class="functionality" id="functionality">
      <div class="wrapper">
            <div class="row">

            </div>
            <div class="row">
                  <div class="functionality-content">
                        <div class="functionality-content__tabs">
                        <div class="functionality-content__title">
                                          <h2 class="headline-section__title">
                                                <?php echo $title ?>
                                          </h2>
                                          <p><?php echo $description ?></p>
                                    </div>
                              <div class="tabs-sticky">

                                    <div class="tab tab_active js-tab" data-tab="1">
                                          <div class="tab__icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M10.1052 3.19995C6.27801 3.19995 4.26562 6.98565 4.26562 10.6625C4.26562 12.5195 4.46751 13.8352 4.74271 15.0437C5.45418 12.0784 6.98776 9.68182 9.46563 7.69995C9.78243 7.44608 10.2143 7.39488 10.5802 7.56662C12.6314 8.51595 14.0608 10.2893 14.9323 12.2562V8.53328C14.9323 5.54235 13.5015 3.19995 10.1052 3.19995ZM21.8927 3.19995C18.4964 3.19995 17.0656 5.54235 17.0656 8.53328V12.2562C17.9371 10.2893 19.3665 8.51595 21.4177 7.56662C21.7836 7.39488 22.2155 7.44715 22.5323 7.69995C25.0102 9.68182 26.5437 12.0784 27.2552 15.0437C27.5304 13.8352 27.7323 12.5195 27.7323 10.6625C27.7323 6.98565 25.7199 3.19995 21.8927 3.19995ZM10.2677 9.81245C7.59891 12.1709 6.39896 15.0994 6.39896 19.2104C6.39896 19.5848 6.19433 19.8965 5.90313 20.0875C6.49406 23.8624 6.13336 28.7999 10.6656 28.7999C13.5872 28.7999 14.9323 26.193 14.9323 23.4666V18.1291C14.9248 18.1291 14.9168 18.1333 14.9094 18.1333C14.3206 18.1333 13.8427 17.6554 13.8427 17.0666C13.8427 15.2362 13.0784 11.5234 10.2677 9.81245ZM21.7302 9.81245C18.9195 11.5234 18.1552 15.2362 18.1552 17.0666C18.1552 17.6554 17.6773 18.1333 17.0885 18.1333C17.0811 18.1333 17.0731 18.1291 17.0656 18.1291V23.4666C17.0656 26.193 18.4107 28.7999 21.3323 28.7999C25.8646 28.7999 25.5039 23.8624 26.0948 20.0875C25.8036 19.8965 25.599 19.5848 25.599 19.2104C25.599 15.0994 24.399 12.1709 21.7302 9.81245Z" />
                                                </svg></div>
                                          <div class="tab__title">Комфорт</div>

                                    </div>
                                    <div class="tab js-tab" data-tab="2">
                                          <div class="tab__icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <g>
                                                            <path d="M15.999 3.19995C11.0902 3.19995 5.98438 4.3062 5.98438 4.3062L5.98021 4.31037C5.49707 4.40708 5.0623 4.66806 4.74975 5.04897C4.43721 5.42987 4.26614 5.90723 4.26562 6.39995V12.8C4.26562 23.8911 14.9552 28.527 14.9552 28.527C15.274 28.7059 15.6334 28.7999 15.999 28.7999C16.3631 28.7992 16.721 28.7052 17.0385 28.527H17.0427C17.0438 28.527 27.7323 23.8911 27.7323 12.8V6.39995C27.7325 5.90592 27.5613 5.42712 27.2479 5.04528C26.9344 4.66343 26.4981 4.40221 26.0135 4.3062C26.0135 4.3062 20.9078 3.19995 15.999 3.19995ZM22.399 9.59995C22.6718 9.59995 22.9446 9.70392 23.1531 9.91245C23.5702 10.3295 23.5702 11.0037 23.1531 11.4208L15.0885 19.4854C14.888 19.6859 14.617 19.7979 14.3344 19.7979C14.0517 19.7979 13.7797 19.6859 13.5802 19.4854L9.89688 15.802C9.47981 15.385 9.47981 14.7108 9.89688 14.2937C10.3139 13.8766 10.9881 13.8766 11.4052 14.2937L14.3344 17.2229L21.6448 9.91245C21.8533 9.70392 22.1262 9.59995 22.399 9.59995Z" />
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="tab__title">Безопасность</div>

                                    </div>
                                    <div class="tab js-tab" data-tab="3">
                                          <div class="tab__icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <g>
                                                            <path d="M13.8661 3.19995C7.38615 3.19995 2.13281 7.97542 2.13281 13.8666C2.13281 16.8923 3.52815 19.6136 5.75573 21.552C5.43621 22.5984 4.76972 23.6391 3.54531 24.5666C3.54462 24.5673 3.54393 24.568 3.54323 24.5687C3.44224 24.6071 3.3553 24.6753 3.29391 24.7642C3.23253 24.8531 3.1996 24.9586 3.19948 25.0666C3.19948 25.2081 3.25567 25.3437 3.35569 25.4437C3.45571 25.5438 3.59136 25.5999 3.73281 25.5999C3.76926 25.5995 3.80556 25.5953 3.84115 25.5875C5.91055 25.5814 7.67622 24.6975 9.08073 23.5895C9.74723 23.8606 10.443 24.0841 11.1682 24.2395C10.844 23.3222 10.6661 22.3456 10.6661 21.3333C10.6661 16.0394 15.4512 11.7333 21.3328 11.7333C22.8069 11.7333 24.2122 12.0041 25.4911 12.4937C24.7487 7.2521 19.8331 3.19995 13.8661 3.19995ZM21.3328 13.8666C19.0696 13.8666 16.8991 14.6533 15.2988 16.0536C13.6985 17.4538 12.7995 19.353 12.7995 21.3333C12.7995 23.3136 13.6985 25.2127 15.2988 26.613C16.8991 28.0133 19.0696 28.7999 21.3328 28.7999C22.4239 28.7984 23.5045 28.6139 24.5161 28.2562C25.8243 29.17 27.4073 29.8478 29.2203 29.8541C29.2573 29.8623 29.295 29.8665 29.3328 29.8666C29.4743 29.8666 29.6099 29.8104 29.7099 29.7104C29.81 29.6104 29.8661 29.4747 29.8661 29.3333C29.866 29.2241 29.8323 29.1177 29.7697 29.0283C29.7071 28.9389 29.6186 28.8708 29.5161 28.8333C28.5399 28.0921 27.9143 27.2763 27.5391 26.4458C29.0304 25.063 29.8626 23.2345 29.8661 21.3333C29.8661 19.353 28.9671 17.4538 27.3668 16.0536C25.7665 14.6533 23.596 13.8666 21.3328 13.8666Z" />
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="tab__title">Окружение</div>

                                    </div>
                              </div>


                        </div>
                        <div class="functionality-content__wrapper">
                              <div class="functionality-content__media js-tab-content tab-media_active" data-tab-content="1">
                                    <div class="iphone-wrapper">

                                          <?php while (have_rows('phone-1')) : the_row();
                                                // переменные
                                                $title = get_sub_field('title');
                                                $poster = get_sub_field('poster');
                                                $video = get_sub_field('video');
                                          ?>
                                                <div class="iphone-video">
                                                      <div class="iphone-video__mockup">
                                                            <div class="iphone-video__porgerss"></div>
                                                            <img  data-src="<?php echo get_template_directory_uri() ?>/img/iphone.png" alt="" class="img-responsive lazy">
                                                            <video playsinline preload="metadata" poster="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODg2IiBoZWlnaHQ9IjE5MjAiIHZpZXdCb3g9IjAgMCA4ODYgMTkyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4wNCIgZD0iTTQxOS40MDIgMTA3MS45OUwzNzEuNzYyIDkxMS45NzJIMzcwLjY1NEMzNzAuODM5IDkxNS43ODIgMzcxLjExNiA5MjEuNDk3IDM3MS40ODUgOTI5LjExN0MzNzEuODU0IDkzNi43MzcgMzcyLjIyNCA5NDQuOTI5IDM3Mi41OTMgOTUzLjY5MkMzNzIuOTYyIDk2Mi4yNjQgMzczLjE0NyA5NzAuMDc1IDM3My4xNDcgOTc3LjEyM1YxMDcxLjk5SDMzNS43NTVWODY3Ljk2NkgzOTIuODEyTDQzOS42MjEgMTAyMy45OUg0NDAuNDUyTDQ5MC4wMzEgODY3Ljk2Nkg1NDcuMDg4VjEwNzEuOTlINTA4LjAzNVY5NzUuNDA5QzUwOC4wMzUgOTY4LjkzMiA1MDguMTI3IDk2MS41MDIgNTA4LjMxMiA5NTMuMTJDNTA4LjY4MSA5NDQuNzM4IDUwOC45NTggOTM2LjgzMiA1MDkuMTQzIDkyOS40MDNDNTA5LjUxMiA5MjEuNzgzIDUwOS43ODkgOTE2LjA2OCA1MDkuOTc0IDkxMi4yNThINTA4Ljg2Nkw0NTcuOTAyIDEwNzEuOTlINDE5LjQwMloiIGZpbGw9ImJsYWNrIi8+Cjwvc3ZnPgo=" data-poster="<?php echo $poster ?>" muted="muted" class="img-responsive lazy">
                                                                  <source  data-src="<?php echo $video ?>" type="video/mp4">
                                                            </video>

                                                            <div class="iphone-video__mobile">
                                                                  <div class="iphone-video__play">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt="">
                                                                  </div>

                                                            </div>
                                                      </div>
                                                      <div class="iphone-video__description"><?php echo $title ?></div>


                                                </div>

                                          <?php endwhile; ?>


                                    </div>
                                    <?php if (have_rows('video-stories')) : ?>
                                          <div class="stories-video-wrapper">
                                                <?php while (have_rows('video-stories')) : the_row();
                                                      $title = get_sub_field('title');
                                                      $poster = get_sub_field('poster');
                                                      $video = get_sub_field('video');
                                                ?>
                                                      <div class="stories-video-wrapper__item">
                                                            <div class="stories-video-wrapper__pic" style="background-image:url(<?php echo $poster ?>"></div>
                                                            <div class="stories-video-wrapper__title"><?php echo $title ?></div>
                                                            <video playsinline preload="metadata" class="img-responsive">
                                                                  <source src="<?php echo $video ?>" type="video/mp4">
                                                            </video>
                                                            <div class="stories-video-wrapper__control">
                                                                  <div class="stories-video-wrapper__play"><img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt=""></div>
                                                                  <div class="stories-video-wrapper__pause"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pause.svg" alt=""></div>

                                                            </div>

                                                      </div>
                                                <?php endwhile; ?>
                                          </div>
                                    <?php endif; ?>
                              </div>
                              <div class="functionality-content__media  js-tab-content" data-tab-content="2">
                                    <div class="iphone-wrapper">
                                          <?php while (have_rows('phone-2')) : the_row();
                                                // переменные
                                                $title = get_sub_field('title');
                                                $poster = get_sub_field('poster');
                                                $video = get_sub_field('video');
                                          ?>
                                                <div class="iphone-video">
                                                      <div class="iphone-video__mockup">
                                                            <div class="iphone-video__porgerss"></div>
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/iphone.png" alt="" class="img-responsive">
                                                            <video playsinline preload="metadata" poster="<?php echo $poster ?>" muted="muted" class="img-responsive">
                                                                  <source src="<?php echo $video ?>" type="video/mp4">
                                                            </video>

                                                            <div class="iphone-video__mobile">
                                                                  <div class="iphone-video__play">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt="">
                                                                  </div>

                                                            </div>
                                                      </div>
                                                      <div class="iphone-video__description"><?php echo $title ?></div>


                                                </div>

                                          <?php endwhile; ?>
                                    </div>
                                    <?php if (have_rows('video-stories_1')) : ?>
                                          <div class="stories-video-wrapper">
                                                <?php while (have_rows('video-stories_1')) : the_row();
                                                      $title = get_sub_field('title');
                                                      $poster = get_sub_field('poster');
                                                      $video = get_sub_field('video');
                                                ?>
                                                      <div class="stories-video-wrapper__item">
                                                            <div class="stories-video-wrapper__pic" style="background-image:url(<?php echo $poster ?>"></div>
                                                            <div class="stories-video-wrapper__title"><?php echo $title ?></div>
                                                            <video playsinline preload="metadata" class="img-responsive">
                                                                  <source src="<?php echo $video ?>" type="video/mp4">
                                                            </video>
                                                            <div class="stories-video-wrapper__control">
                                                                  <div class="stories-video-wrapper__play"><img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt=""></div>
                                                                  <div class="stories-video-wrapper__pause"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pause.svg" alt=""></div>

                                                            </div>

                                                      </div>
                                                <?php endwhile; ?>
                                          </div>
                                    <?php endif; ?>
                              </div>
                              <div class="functionality-content__media  js-tab-content" data-tab-content="3">
                                    <div class="iphone-wrapper">
                                          <?php while (have_rows('phone-3')) : the_row();
                                                // переменные
                                                $title = get_sub_field('title');
                                                $poster = get_sub_field('poster');
                                                $video = get_sub_field('video');
                                          ?>
                                                <div class="iphone-video">
                                                      <div class="iphone-video__mockup">
                                                            <div class="iphone-video__porgerss"></div>
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/iphone.png" alt="" class="img-responsive">
                                                            <video playsinline preload="metadata" data-poster="<?php echo $poster ?>" muted="muted" class="img-responsive lazy">
                                                                  <source data-src="<?php echo $video ?>" type="video/mp4">
                                                            </video>

                                                            <div class="iphone-video__mobile">
                                                                  <div class="iphone-video__play">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt="">
                                                                  </div>

                                                            </div>
                                                      </div>
                                                      <div class="iphone-video__description"><?php echo $title ?></div>


                                                </div>

                                          <?php endwhile; ?>


                                    </div>
                                    <?php if (have_rows('video-stories_2')) : ?>
                                          <div class="stories-video-wrapper">
                                                <?php while (have_rows('video-stories_2')) : the_row();
                                                      $title = get_sub_field('title');
                                                      $poster = get_sub_field('poster');
                                                      $video = get_sub_field('video');
                                                ?>
                                                      <div class="stories-video-wrapper__item">
                                                            <div class="stories-video-wrapper__pic" style="background-image:url(<?php echo $poster ?>"></div>
                                                            <div class="stories-video-wrapper__title"><?php echo $title ?></div>
                                                            <video playsinline preload="metadata" class="img-responsive">
                                                                  <source src="<?php echo $video ?>" type="video/mp4">
                                                            </video>
                                                            <div class="stories-video-wrapper__control">
                                                                  <div class="stories-video-wrapper__play"><img src="<?php echo get_template_directory_uri() ?>/img/icon-play.svg" alt=""></div>
                                                                  <div class="stories-video-wrapper__pause"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pause.svg" alt=""></div>

                                                            </div>

                                                      </div>
                                                <?php endwhile; ?>
                                          </div>
                                    <?php endif; ?>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
</section>