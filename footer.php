<section class="section cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to atction" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <div class="section-title cta-form-title">Хотите сотрудничать?</div>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  class="input"
                  name="username"
                  placeholder=" "
                  maxlength="100"
                  required
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  class="input"
                  name="userphone"
                  placeholder=" "
                  maxlength="30"
                  required
                />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <!-- input-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg width="14" height="14" class="notify-icon">
                  <use href="img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
            <!-- /.cta-form-footer -->
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <a href="./" class="footer-top-logo">
            <svg class="logo-svg footer-logo">
              <use href="img/sprite.svg#logo"></use>
            </svg>
          </a>
          <a href="tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
          <div class="footer-info-glob-adress">
            <img src="img/svg/mark.svg" alt="mark" />
            <address class="footer-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <!-- /.footer-info -->
          <div class="footer-info-glob-mail">
            <img src="img/svg/mail.svg" alt="mail" />
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email"
              >a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg width="24" height="24" class="footer-social-icon">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg width="24" height="24" class="footer-social-icon">
                <use href="img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
          <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div>
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-columns-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства
                </a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-title">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <span class="made-in-2">Дизайн и разработка</span>
            <svg width="52" height="11" class="footer-social-icon">
              <use href="img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-name"
                type="text"
                class="input modal-input"
                name="username"
                placeholder=" "
                maxlength="100"
                required
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-name"
                >Имя</label
              >
            </div>
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                type="tel"
                class="input modal-input"
                name="userphone"
                placeholder=" "
                maxlength="30"
                required
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-phone"
                >Номер телефона</label
              >
            </div>
          </div>
          <!-- input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify modal-notify">
              <svg width="14" height="14" class="notify-icon modal-notify-icon">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text modal-notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>


      <div class="modal-dialog">
        <img src="img/modal-image.png" alt="modal-image" class="modal-image">
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <h2 class="modal-title">Спасибо за заявку!</h2>
        <p class="modal-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <button type="submit" class="button modal-form-button">
        Вернуться на главную
            </button>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
