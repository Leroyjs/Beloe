<header id="menu" class="menu">

    <div class="menu__logo-container">
        <a href="index.php" class="menu__logo-box">
            <img
                    src="./media/logo.svg"
                    alt="Охотничья база Белое"
                    class="menu__logo"
            />
        </a>
        <button onclick="closeMenu()" id="btnCloseMenu" class="button_close"></button>
    </div>


    <hr class="menu__line"/>

    <nav class="menu__nav">
        <ul>
            <li class="menu__link-container">
                <a class="menu__link" href="hunting-types.php">Все виды охоты</a>
            </li>

            <li>
                <hr class="menu__line"/>
            </li>

            <li class="menu__link-container">
                <a class="menu__link" href="about.php">О
                    нас</a></li>
            <li class="menu__link-container"><a class="menu__link" href="our-news.php">Новости</a>
            </li>
            <li class="menu__link-container"><a class="menu__link"
                                                href="reviews.php">Отзывы</a></li>
            <li class="menu__link-container"><a class="menu__link" href="gallery.php">Галерея</a>
            </li>

            <li>
                <hr class="menu__line"/>
            </li>

            <li class="menu__link-container"><a class="menu__link" href="contacts.php">Контакты</a>
            </li>
            <li class="menu__lang">
                <img src="./media/RUS.svg" alt="RU" class="lang"/>
                <img src="./media/DEU.svg" alt="DEU" class="lang"/>
            </li>
        </ul>
    </nav>


    <span class="menu__address">
                Россия, Курганская область лес
                <br/>
                Каминская Дача
            </span>
    <a class="menu__drive" href="contacts.php">Как проехать?</a>

    <div class="menu__bottom-container">
        <div class="numbers container numbers_menu">
            <a href="tel:+73523993052" class="numbers__block">8 (3523) 99 — 30 — 52</a>
            <a href="tel:+73523993052" class="numbers__block">8 (3523) 99 — 30 — 52</a>
        </div>

        <button class="button button_green" href="order-form.php">
            Записаться на охоту
        </button>
    </div>

</header>

<div class="menu--small">
    <button onclick="toggleMenu()" id="btnDropDownMenu" class="button button_menu">
        Меню
    </button>
</div>




