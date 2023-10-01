<?php /*Template Name: About */?>
<?php
get_header(); ?>



   
     <section class="about">
  <div class="about__hero page-hero">
    <h1 class="about__title  wow animate__fadeInDown" data-wow-offset="300" data-wow-delay=".1s">Chili-bar «Burrito»</h1>
    <div class="about__text wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".3s">This is a 24-hour bar with Mexican cuisine and drinks.
      It will be noisy, hot and spicy!</div>
      <div class="down-wrap">
        <a href="#down" class="about__down">
          <svg class="animate__animated animate__fadeInDown animate__infinite animate__slower"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrows-down"></use></svg>
        </a>
      </div>
  </div>
  <div class="about-block about-interior">
    <div class="about-block__container about-interior__container container">
      <hr>
      <h2 class="about-block__title">Interior</h2>
      <ul class="about-interior__images grid">
</ul>
    </div>
  </div>
  <div class="about-block about-chef">
    <div class="about-block__container container">
      <hr>
      <h2 class="about-block__title">Chef</h2>
      <div class="about-chef__content">
        <div class="about-chef__left wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".1s">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chef.png" alt="chef">
          <button class="about__overlay" data-graph-path="modal-first" data-id="6"></button>
        </div>
        <div class="about-chef__right wow animate__fadeInRight" data-wow-offset="300" data-wow-delay=".1s">
        <div class="about-chef__subtitle">Chef of the chili bar «Burrito»</div>
        <div class="about-chef__name">Pablo Gonzalez</div>
        <div class="about-chef__images">
          <div class="about-chef__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-dish-1.png" alt="salad">
            <button class="about__overlay" data-graph-path="modal-first" data-id="7"></button>
          </div>
          <div class="about-chef__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-dish-2.png" alt="burrito">
            <button class="about__overlay" data-graph-path="modal-first" data-id="8"></button>
          </div>
          <div class="about-chef__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-dish-3.png" alt="nuts">
            <button class="about__overlay" data-graph-path="modal-first" data-id="9"></button>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="about__link wow animate__fadeInUp" data-wow-offset="300" data-wow-delay=".1s">
      <a href="#">go over <span>menu</span>
        <svg>
          <use xlink:href="img/sprite.svg#arrow"></use>
        </svg> </a>
</div>
    <div class="about__decor wow animate__pulse" data-wow-offset="300">
      <div class="flower"></div>

    </div>
    <div class="about__hr">
      <hr>
    </div>

  </div>

</section>



   

    <div class="graph-modal">
    <div class="graph-modal__container modal-first" role="dialog" aria-modal="true" data-graph-target="modal-first">
        <button class="btn-reset graph-modal__close js-modal-close" aria-label="Закрыть модальное окно"></button>
        <div class="graph-modal-content">

        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper my-swiper mySwiper2">
          <div class="swiper-wrapper my-swiper-wrapper">
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

        </div>

          <div thumbsSlider="" class="swiper  my-swiper mySwiper">
            <div class="swiper-wrapper my-swiper-wrapper">

          </div>

        </div>

      <!-- Swiper JS -->

      <!-- Initialize Swiper -->

      </div>
  </div>
</div>

  </div>
  <?php 
  get_template_part( 'templates/address');?>
  <?php
get_footer(); ?>
  


 
