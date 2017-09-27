<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<div class="footer-inner">
    <div class="footer-inner-about-company">
        <div class="footer-title">
            О компании
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footer",
            array(
                "ROOT_MENU_TYPE" => "top",
                //"MAX_LEVEL" => "2",
                //"CHILD_MENU_TYPE" => "top",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "SHOW_LAST_LEVEL_BUTTONS" => "N",
                "COMPONENT_TEMPLATE" => "header"
            ),
            false
        );?>
    </div>


    <div class="services-list-item__background2">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-engineering.jpg" alt="Логотип" />
    </div>


    <div class="services-list-centered">
        <div class="services-list-items">
            <div class="services-list-item">
                <div class="services-list-item-inner">
                    <!--<div class="services-list-item__link">
                        <a href="/services/engineering/"></a>
                    </div>
                    <div class="services-list-item__background-opacity"></div>-->
                    <div class="services-list-item__background">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-engineering.jpg" alt="Логотип" />
                    </div>
                   <!-- <div class="services-list-item__picture">
                        <div class="services-list-item__picture-inner">
                            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/icon001.png" alt="Логотип" class="mod" />
                        </div>
                    </div>
                    <div class="services-list-item__title">
                        <div class="services-list-item__title-inner">
                            Инжиниринг
                        </div>
                    </div>
                    <div class="services-list-item__text">
                        <div class="services-list-item__text-inner">
                            Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                        </div>
                    </div>-->
                </div>
            </div>
            <!--<div class="services-list-item">
                <div class="services-list-item-inner">
                    <div class="services-list-item__link">
                        <a href="/services/projects/"></a>
                    </div>
                    <div class="services-list-item__background-opacity"></div>
                    <div class="services-list-item__background">
                        <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/services-projecting.jpg" alt="Логотип" />
                    </div>
                    <div class="services-list-item__picture">
                        <div class="services-list-item__picture-inner">
                            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/icon002.png" alt="Логотип" />
                        </div>
                    </div>
                    <div class="services-list-item__title">
                        <div class="services-list-item__title-inner">
                            Проектирование
                        </div>
                    </div>
                    <div class="services-list-item__text">
                        <div class="services-list-item__text-inner">
                            Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-list-item services-list-item-right">
                <div class="services-list-item-inner">
                    <div class="services-list-item__background-opacity"></div>
                    <div class="services-list-item__background">
                        <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/services-consulting.jpg" alt="Логотип" />
                    </div>
                    <div class="services-list-item__picture">
                        <div class="services-list-item__picture-inner">
                            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/icon003.png" alt="Логотип" />
                        </div>
                    </div>
                    <div class="services-list-item__title">
                        <div class="services-list-item__title-inner">
                            Консалтинг
                        </div>
                    </div>
                    <div class="services-list-item__text">
                        <div class="services-list-item__text-inner">
                            Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>

            <div class="services-list-item">
                <div class="services-list-item-inner">
                    <div class="services-list-item__background-opacity"></div>
                    <div class="services-list-item__background">
                        <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/services-production.jpg" alt="Логотип" />
                    </div>
                    <div class="services-list-item__picture">
                        <div class="services-list-item__picture-inner">
                            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/icon006.png" alt="Логотип" />
                        </div>
                    </div>
                    <div class="services-list-item__title">
                        <div class="services-list-item__title-inner">
                            Сопровождение строительства
                        </div>
                    </div>
                    <div class="services-list-item__text">
                        <div class="services-list-item__text-inner">
                            Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-list-item">
                <div class="services-list-item-inner">
                    <div class="services-list-item__background-opacity"></div>
                    <div class="services-list-item__background">
                        <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/services-support.jpg" alt="Логотип" />
                    </div>
                    <div class="services-list-item__picture">
                        <div class="services-list-item__picture-inner">
                            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/icon005.png" alt="Логотип" />
                        </div>
                    </div>
                    <div class="services-list-item__title">
                        <div class="services-list-item__title-inner">
                            Сопровождение строительства
                        </div>
                    </div>
                    <div class="services-list-item__text">
                        <div class="services-list-item__text-inner">
                            Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-list-item services-list-item-right">
                <div class="services-list-item-inner">
                    <div class="services-list-item__background-opacity"></div>
                    <div class="services-list-item__background">
                        <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/services-post-warranty.jpg" alt="Логотип" />
                    </div>
                    <div class="services-list-item__picture">
                        <div class="services-list-item__picture-inner">
                            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/icon004.png" alt="Логотип" />
                        </div>
                    </div>
                    <div class="services-list-item__title">
                        <div class="services-list-item__title-inner">
                            Послегарантийное
                            обслуживание
                        </div>
                    </div>
                    <div class="services-list-item__text">
                        <div class="services-list-item__text-inner">
                            Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </div>



    <div class="footer-inner-services">
        <div class="footer-title">
            Услуги
        </div>
        <div class="footer-text">
            <ul>
                <li class=""><a href="/services/engineering.php">Инжиниринг</a></li>
                <li class=""><a href="/services/projects/">Проэктирование</a></li>
                <li class=""><a href="#">Консалтинг</a></li>
                <li class=""><a href="#">Производство оборудования</a></li>
                <li class=""><a href="#">Сопровождение строительства</a></li>
                <li class=""><a href="#">Послегарантийное обслуживание</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-inner-social-network">
        <div class="footer-title">
            Соцсети
        </div>
        <div class="footer-text">
            <ul>
                <li class="">
                    <a href="www.facebook.com">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        Facebook
                    </a></li>
                <li class="">
                    <a href="/services/projects/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        Instagram
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-inner-about-contacts">
        <div class="footer-title">
            Контакты
        </div>
        <div class="footer-text">
            Тел: +7-(495)-287-35-00<br/>
            E-mail: info@nordiceng.ru
        </div>

        <div class="footer-title">
            наш адрес
        </div>
        <div class="footer-text">
            Москва, 119019<br/>
            Гоголевский б-р, д. 11
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
