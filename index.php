<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Нордик Инжиниринг");
$APPLICATION->SetPageProperty("keywords", "главная, нордик инжиниринг");
$APPLICATION->SetPageProperty("description", "Главная страница");
$APPLICATION->SetTitle("Главная страница"); ?><!--<div class="carousel">
    <div class="carousel-info">
        <div class="carousel-info-inner">
            <div class="carousel-info__text">
                Мировой лидер в производстве<br/>
                высокотехнологичных и инновационных судов
                в области арктического судоходства
            </div>
            <div class="carousel-info__button">
                Подробнее
            </div>
        </div>
    </div>
</div>-->
<div class="main-video"></div>
<div class="about-company">
	<div class="about-company-text">
		<div class="about-company-text__caption">
			 О КОМПАНИИ
		</div>
		<div style="clear: both;">
		</div>
		<div class="about-company-text__logo">
		</div>
		<div style="clear: both;">
		</div>
		<div class="about-company-text__text">
			<div class="about-company-text__text-caption">
				 Высокотехнологичное судостроение
			</div>
			<div style="clear: both;">
			</div>
			<div class="about-company-text__text-text">
				 Являясь лидером в высокотехнологичном судостроении, «Нордик Ярдс» концентрируется на производстве судов специального назначения, таких как ледокольные и ледоходные суда, специализированные танкеры, паромы и оффшорные конструкции. Компания сочетает инновационное высокотехнологичное производство с неукоснительным соблюдением сроков поставки и отличается высочайшим качеством своих судов.
			</div>
			<div class="about-company-text__text-text">
				 «Нордик Ярдс» располагает двумя верфями в Висмаре и Варнемюнде с прямым выходом в Балтийское море. Оба предприятия входят в число самых крупных, современных и эффективных верфей в мире. С момента их основания в 1946 году на верфях в Висмаре и Варнемюнде было построено более 900 судов в 74 различных конфигурациях. После успешного перепрофилирования «Нордик Ярдс» в долгосрочной перспективе обеспечит занятость до 1.600 высококвалифицированных сотрудников.
			</div>
		</div>
	</div>
	<div class="about-company-images">
		<div class="about-company-images__image">
 <img src="/local/templates/sitetest/img/main_about_company_1.jpg" alt="Логотип">
		</div>
		<div class="about-company-images__image">
 <img src="/local/templates/sitetest/img/main_about_company_2.jpg" alt="Логотип">
		</div>
	</div>
</div>
<div style="clear: both;">
</div>
<div class="services">
	<div class="services__caption">
		 Услуги
	</div>
	<div style="clear: both;">
	</div>
	<div class="services__text">
		 Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах
	</div>
	<div class="services-list services-list-main">
		 <?$ElementID = $APPLICATION->IncludeComponent(
        "bitrix:nordic.services",
        "def",
        Array(),
        false
    );?>
	</div>
</div>
<div class="last_news_ajax">
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>