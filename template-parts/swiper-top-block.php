<div class="swiper features-slider">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text?>">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#certificate"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text?>">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text?>">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text?>">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text <?= $header_features_text?>">Оперативное производство</p>
            </li>
          </ul>
          <div class="slider-buttons">
            <div class="slider-button-prev">
             <?php
           if (!empty($arrow)) {
           echo '<img src="img/svg/arrow-prev-black.svg" alt="arrow-prev-black" />';
           } else {
            echo '<img src="img/svg/arrow-prev.svg" alt="arrow-prev" />';
           } ?>     
            </div>
            <div class="slider-button-next">
            <?php
           if (!empty($arrow)) {
           echo '<img src="img/svg/arrow-next-black.svg" alt="arrow-next-black" />';
           } else {
            echo '<img src="img/svg/arrow-next.svg" alt="arrow-next" />';
           } ?>     
            </div>
          </div>
          <!-- кнопки навигации вперед/назад -->
        </div>