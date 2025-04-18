<footer class="footer" id="footer">
    <div class="footer__container">
        <p class="title footer__title">Наши контакты</p>
        <div class="footer__grid">
            <div class="footer__column">
                <a href="/" class="footer__logo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/footer-logo.png" alt="Главная страница"
                        class="footer__logo-img">
                </a>
                <p class="footer__address">
                    г. Санкт-Петербург ул. 6-я Жерновская, д. 17, стр. 1, помещение 8-н.
                </p>
                <p class="footer__work-time">ПН-ПТ<br>c 10:00 до 18:00</p>
            </div>
            <ul class="footer__social">
                <li class="footer__social-item">
                    <a href="tel:+79219451815" class="footer__social-link footer__social-link--phone">
                        +7 921 945 18 15
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://t.me/buhboss" class="footer__social-link footer__social-link--tg">
                        t.me/buhboss
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="mailto:info@zdfinance.ru" class="footer__social-link footer__social-link--mail">
                        info@zdfinance.ru
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://vk.com/zdfinance" class="footer__social-link footer__social-link--vk">
                        vk.com/zdfinance
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://www.instagram.com/zdfinance" class="footer__social-link footer__social-link--inst">
                        zdfinance
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://rutube.ru/channel/41674389/"
                        class="footer__social-link footer__social-link--rutube">
                        Здоровые финансы
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__info">
            <p class="footer__info-inn">ИНН 7806619984</p>
            <ul class="footer__list">
                <li>
                    <a href="<?= home_url() ?>/details/">
                        Реквизиты
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/agreement/">
                        Согласие на получение информационной рассылки
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/privacy-policy/">
                        Политика конфиденциальности
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/oferta/">
                        Договор публичной оферты об оказании услуг
                    </a>
                </li>
            </ul>
        </div>
        <p class="footer__copy">
            Информация, представленная на сайте, является исключительной собственностью ООО&nbsp;«Здоровые финансы»
            ©&nbsp;ООО «Здоровые финансы» 2024
        </p>
    </div>
</footer>
<div class="zdin-modal" id="zdin-modal">
    <div class="zdin-modal__container"></div>
</div>
<div id="modal-1" class="form-modal form-modal--padding">
    <button class="form-modal__close" aria-label="закрыть окно"></button>
    <form data-bitrix-form data-ajax-url="<?php echo admin_url('admin-ajax.php'); ?>" class="form-modal__elem">
        <p class="form-modal__descr">Консультация с финансовым директором</p>
        <input type="hidden" name="title" value="консультация с финансовым директором" />
        <div class="form-modal__label">
            <input class="form-modal__field" type="text" name="name" placeholder="Ваше имя" required />
            <span class="form-modal__field-text" data-text="Ваше имя"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="text" name="surname" placeholder="Ваша фамилия" />
            <span class="form-modal__field-text" data-text="Ваша фамилия"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="email" name="email" placeholder="Ваш email" required />
            <span class="form-modal__field-text" data-text="Ваш email"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="tel" name="tel" required placeholder="Ваш телефон" />
            <span class="form-modal__field-text" data-text="Ваш телефон"></span>
        </div>
        <button class="form-modal__btn" type="submit">Отправить</button>
        <div class="form-modal__message"></div>
    </form>
</div>
<div id="modal-2" class="form-modal">
    <button class="form-modal__close" aria-label="закрыть окно"></button>
    <form data-bitrix-form data-ajax-url="<?php echo admin_url('admin-ajax.php'); ?>" class="form-modal__elem">
        <p class="form-modal__descr">Заказать обратный звонок</p>
        <input type="hidden" name="title" value="Заказать обратный звонок" />
        <div class="form-modal__label">
            <input class="form-modal__field" type="text" name="name" placeholder="Ваше имя" required />
            <span class="form-modal__field-text" data-text="Ваше имя"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="email" name="email" placeholder="Ваш email" />
            <span class="form-modal__field-text" data-text="Ваш email"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="tel" name="tel" required placeholder="Ваш телефон" />
            <span class="form-modal__field-text" data-text="Ваш телефон"></span>
        </div>
        <button class="form-modal__btn" type="submit">Отправить</button>
        <div class="form-modal__message"></div>
    </form>
</div>
<div id="modal-3" class="form-modal">
    <button class="form-modal__close" aria-label="закрыть окно"></button>
    <form data-bitrix-form data-ajax-url="<?php echo admin_url('admin-ajax.php'); ?>" class="form-modal__elem">
        <p class="form-modal__descr">Консультация с финансовым директором</p>
        <input type="hidden" name="title" value="Консультация с финансовым директором" />
        <div class="form-modal__label">
            <input class="form-modal__field" type="text" name="name" placeholder="Ваше имя" required />
            <span class="form-modal__field-text" data-text="Ваше имя"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="email" name="email" placeholder="Ваш email" />
            <span class="form-modal__field-text" data-text="Ваш email"></span>
        </div>
        <div class="form-modal__label">
            <input class="form-modal__field" type="tel" name="tel" required placeholder="Ваш телефон" />
            <span class="form-modal__field-text" data-text="Ваш телефон"></span>
        </div>
        <div class="form-modal__label">
            <textarea class="form-modal__textarea" type="tel" name="message" required
                placeholder="Сообщение"></textarea>
            <span class="form-modal__field-text" data-text="Сообщение"></span>
        </div>
        <button class="form-modal__btn" type="submit">Отправить</button>
        <div class="form-modal__message"></div>
    </form>
</div>
<?php wp_footer(); ?>
</body>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Здоровые финансы",
  "url": "https://zdfinance.ru/",
  "logo": "https://zdfinance.ru/assets/imgs/logo.png",
  "description": "Профессиональные услуги финансовой аналитики, бухгалтерского учета, бизнес-консультирования и аудита.",
  "sameAs": [
    "https://t.me/buhboss",
    "https://www.instagram.com/zdfinance",
    "https://vk.com/zdfinance",
    "https://wa.me/79219451815",
    "https://rutube.ru/channel/41674389/"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7-921-945-18-15",
    "contactType": "customer service"
  }
}
</script>

</html>