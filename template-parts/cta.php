<section class="section cta">
      <div class="bg-grey section-cta">
        <picture>
          <source type="image/webp" srcset="img/cta.webp">
          <source type="image/png" srcset="img/cta.png">
          <img class="cta-image" src="img/cta.png" alt="cta">
        </picture>
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
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
                  class="input phone-mask"
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