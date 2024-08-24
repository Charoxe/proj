<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

global $APPLICATION;
$dir = $APPLICATION->GetCurDir();

if($dir === '/') {
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/index.js');
} elseif ($dir === '/graph/') {
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/graph.js');
}

?>
</main>


<?php
$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "bottom",
    Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "bottom",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(""),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "bottom",
        "USE_EXT" => "N"
    )
);
?>

</div>





<!-- Modals -->
<div id="modal-example" class="modal-wrapper modal-wrapper--example" data-modal>
    <div class="modal">
        <div class="modal__wrap">
            <div class="modal__header"> Test modal title </div>

            <div class="modal__body">
                <div class="modal__content">
                    <p class="modal__text"> Lorem ipsum dolor sit amet consectetur. </p>
                    <p class="modal__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusamus?
                    </p>
                    <p class="modal__text"> Lorem ipsum dolor sit. </p>
                </div>
            </div>

            <div class="modal__footer">
                <p class="modal__text"> Test modal footer </p>
            </div>
        </div>
    </div>
</div>
<div id="modal-card-employee" class="modal-wrapper modal-wrapper--full modal-wrapper--card-employee" data-modal>
    <div class="modal modal--full">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <div class="modal__wrap">
            <div class="modal__body">
                <div class="card-employee">
                    <div class="card-employee__inner">
                        <div class="card-employee__row">
                            <div class="card-employee__avatar">
                                <img src="/local/templates/infoland/assets/images/user-big-1.jpg" alt="Прибылова Кристина Николаевна">
                            </div>
                            <div class="card-employee__name">Прибылова Кристина<br> Николаевна</div>
                            <div class="card-employee__status">Заместитель директора</div>
                            <div class="card-employee__trophies">
                                <div class="trophie">
                                    <div class="trophie__icon">
                                        <svg class="svg " >
                                            <use xlink:href="svg/sprite.svg#trophie-1"></use>
                                        </svg>
                                    </div>
                                    <div class="trophie__number">15</div>
                                </div>
                                <div class="trophie">
                                    <div class="trophie__icon">
                                        <svg class="svg " >
                                            <use xlink:href="svg/sprite.svg#trophie-2"></use>
                                        </svg>
                                    </div>
                                    <div class="trophie__number">37</div>
                                </div>
                                <div class="trophie">
                                    <div class="trophie__icon">
                                        <svg class="svg " >
                                            <use xlink:href="svg/sprite.svg#trophie-3"></use>
                                        </svg>
                                    </div>
                                    <div class="trophie__number">9</div>
                                </div>
                                <div class="trophie">
                                    <div class="trophie__icon">
                                        <svg class="svg " >
                                            <use xlink:href="svg/sprite.svg#trophie-4"></use>
                                        </svg>
                                    </div>
                                    <div class="trophie__number">10</div>
                                </div>
                                <div class="trophie">
                                    <div class="trophie__icon">
                                        <svg class="svg " >
                                            <use xlink:href="svg/sprite.svg#trophie-5"></use>
                                        </svg>
                                    </div>
                                    <div class="trophie__number">28</div>
                                </div>
                                <div class="trophie">
                                    <div class="trophie__icon">
                                        <svg class="svg " >
                                            <use xlink:href="svg/sprite.svg#trophie-6"></use>
                                        </svg>
                                    </div>
                                    <div class="trophie__number">13</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-employee__row">
                            <div class="card-employee__info">
                                <div class="card-employee__info-row">
                                    <div class="card-employee__info-cell">
                                        <span>Email</span>
                                    </div>
                                    <div class="card-employee__info-cell email">
                                        <a href="mailto:kristy@infoland.ru">kristy@infoland.ru</a>
                                    </div>
                                </div>
                                <div class="card-employee__info-row">
                                    <div class="card-employee__info-cell">
                                        <span>Телефон</span>
                                    </div>
                                    <div class="card-employee__info-cell phone">
                                        <a href="tel:+7 (915) 433-11-16">+7 (915) 433-11-16,доб.200231</a>
                                    </div>
                                </div>
                                <div class="card-employee__info-row">
                                    <div class="card-employee__info-cell">
                                        <span>День рождения</span>
                                    </div>
                                    <div class="card-employee__info-cell birthday">
                                        <span>28 августа</span>
                                    </div>
                                </div>
                                <div class="card-employee__info-row">
                                    <div class="card-employee__info-cell">
                                        <span>Оставшиеся дни отпуска</span>
                                    </div>
                                    <div class="card-employee__info-cell vacation">
                                        <span>27</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-employee__row">
                            <div class="card-employee__title">Руководитель</div>

                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-8.jpg" alt="Овчинников Антон Геннадиевич">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Овчинников Антон Геннадиевич</div>
                                        <div class="card-user-mini__subname"></div>
                                    </div>
                                </div>
                            </a>    </div>
                        <div class="card-employee__row">
                            <div class="card-employee__title">Подчиненные</div>

                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-9.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">Менеджер</div>
                                    </div>
                                </div>
                            </a>    </div>
                        <div class="card-employee__row">
                            <div class="card-employee__title">Подчиненные</div>

                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-9.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">Менеджер</div>
                                    </div>
                                </div>
                            </a>    </div>
                    </div>
                </div>      </div>
        </div>
    </div>
</div>
<div id="modal-thankyou" class="modal-wrapper modal-wrapper--vidget" data-modal>
    <div class="modal">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <form class="modal__wrap" data-form>
            <div class="modal__header">
                <div class="modal__title">
                    Скажи «Спасибо»
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <select
                            id="select-employee"
                            name="select-employee-1"
                            class="select button button-select modal__select"
                            size="1"
                            data-select='{"placeholder": "Выберите сотрудника"}'
                    >
                        <option value="Овчинников Антон"> Овчинников Антон </option>
                        <option value="Прибылова Кристина"> Прибылова Кристина </option>
                        <option value="Феофанов Дмитрий"> Феофанов Дмитрий </option>
                        <option value="Габитов Михаил"> Габитов Михаил </option>
                        <option value="Данилов Никита"> Данилов Никита </option>
                        <option value="Захаров Владимир"> Захаров Владимир </option>
                        <option value="Феофанов Дмитрий"> Феофанов Дмитрий </option>
                        <option value="Габитов Михаил"> Габитов Михаил </option>
                        <option value="Данилов Никита"> Данилов Никита </option>
                        <option value="Захаров Владимир"> Захаров Владимир </option>
                    </select>

                    <div class="modal__radio-group">
                        <label class="radio">
                            <input class="radio__input" type="radio" name="name1">
                            <div class="radio__wrap">
                                <svg class="svg " >
                                    <use xlink:href="svg/sprite.svg#trophie-1"></use>
                                </svg>
                                <p class="radio__text">
                                    За помощь в работе
                                </p>
                                <div class="radio__custom"></div>
                            </div>
                        </label>

                        <label class="radio">
                            <input class="radio__input" type="radio" name="name1">
                            <div class="radio__wrap">
                                <svg class="svg " >
                                    <use xlink:href="svg/sprite.svg#trophie-2"></use>
                                </svg>
                                <p class="radio__text">
                                    За поддержку и внимание
                                </p>
                                <div class="radio__custom"></div>
                            </div>
                        </label>

                        <label class="radio">
                            <input class="radio__input" type="radio" name="name1">
                            <div class="radio__wrap">
                                <svg class="svg " >
                                    <use xlink:href="svg/sprite.svg#trophie-3"></use>
                                </svg>
                                <p class="radio__text">
                                    За командную работу
                                </p>
                                <div class="radio__custom"></div>
                            </div>
                        </label>

                        <label class="radio">
                            <input class="radio__input" type="radio" name="name1">
                            <div class="radio__wrap">
                                <svg class="svg " >
                                    <use xlink:href="svg/sprite.svg#trophie-4"></use>
                                </svg>
                                <p class="radio__text">
                                    Высший пилотаж
                                </p>
                                <div class="radio__custom"></div>
                            </div>
                        </label>

                        <label class="radio">
                            <input class="radio__input" type="radio" name="name1">
                            <div class="radio__wrap">
                                <svg class="svg " >
                                    <use xlink:href="svg/sprite.svg#trophie-5"></use>
                                </svg>
                                <p class="radio__text">
                                    За улыбку и обаяние
                                </p>
                                <div class="radio__custom"></div>
                            </div>
                        </label>

                        <label class="radio">
                            <input class="radio__input" type="radio" name="name1">
                            <div class="radio__wrap">
                                <svg class="svg " >
                                    <use xlink:href="svg/sprite.svg#trophie-6"></use>
                                </svg>
                                <p class="radio__text">
                                    За смелость и решительность
                                </p>
                                <div class="radio__custom"></div>
                            </div>
                        </label>
                    </div>

                    <div class="input-wrapper">
                        <div class="input-container">
                            <textarea class="textarea" placeholder="Комментарий"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button button--full" type="button">
                    <span>Отправить</span>
                </button>
            </div>
        </form>
    </div>
</div>
<div id="modal-gratitude" class="modal-wrapper modal-wrapper--vidget" data-modal>
    <div class="modal">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <form class="modal__wrap" data-form>
            <div class="modal__header">
                <div class="modal__title">
                    Отправлено!
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <p class="modal__text"><span class="color-gray">Вы поблигодарили</span> Котову Елену, за&nbsp;помощь в&nbsp;работе!</p>
                </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button button--full" type="button" data-modal-target="#modal-vidget">
                    <span>Отправить еще</span>
                </button>
            </div>
        </form>
    </div>
</div>
<div id="modal-question" class="modal-wrapper modal-wrapper--vidget" data-modal>
    <div class="modal">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <form class="modal__wrap" data-form>
            <div class="modal__header">
                <div class="modal__title">
                    Предложение / вопрос
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <div class="input-wrapper">
                        <div class="input-container">
                            <input name="text" type="text" class="input" placeholder="Тема*">
                            <div class="message">Заполните это поле</div>
                        </div>
                    </div>

                    <div class="input-wrapper">
                        <div class="input-container">
                            <textarea name="text" class="textarea textarea--big" placeholder="Ваше предложение*"></textarea>
                            <div class="message">Заполните это поле</div>
                        </div>
                    </div>
                </div>

                <div class="agreement">
                    Нажимая на кнопку «Отправить», вы даете согласие на обработку <a href="#">персональных данных</a>
                </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button button--full" type="submit">
                    <span>Отправить</span>
                </button>
            </div>
        </form>
    </div>
</div>
<div id="modal-send" class="modal-wrapper modal-wrapper--vidget" data-modal>
    <div class="modal">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <form class="modal__wrap" data-form>
            <div class="modal__header">
                <div class="modal__title">
                    Отправлено!
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <p class="modal__text color-gray">Ваше собщение успешно отправлено! Руководство рассмотрит его<br> в&nbsp;ближайшее время</p>
                </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button button--full j_closeModal" type="button" data-modal-target="#modal-vidget">
                    <span>Отлично!</span>
                </button>
            </div>
        </form>
    </div>
</div>
<div id="modal-salary-project" class="modal-wrapper modal-wrapper--salary-project" data-modal>
    <div class="modal">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <div class="modal__wrap">
            <div class="modal__header">
                <div class="modal__title">
                    Подключение к зарплатному проекту
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <p class="modal__text color-gray">
                        В нашей компании действуют зарплатные проекты в ПАО Банк ВТБ, АО АЛЬФА-БАНК, ПАО СБЕРБАНК и ПАО РОСБАНК.
                    </p>
                    <p class="modal__text color-gray">
                        Для того, чтобы подключиться к зарплатному проекту, направь заявку главному бухгалтеру, указав в письме выбранный банк.
                    </p>

                    <div class="card-user-big">
                        <div class="card-user-big__inner">
                            <div class="card-user-big__avatar">
                                <img src="/local/templates/infoland/assets/images/user-big-2.jpg" alt="Куликова Елена">
                            </div>
                            <div class="card-user-big__info">
                                <div class="card-user-big__name">Куликова Елена</div>
                                <div class="card-user-big__subname">Главный бухгалтер</div>
                                <div class="card-user-big__contacts">
                                    <a href="tel:+7 (915) 433-11-16" class="card-user-big__tel">+7 (915) 433-11-16</a>
                                    <a href="mailto:kulikova@infoland.ru">kulikova@infoland.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button" type="button">
                    <span>Отправить заявку</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div id="modal-ndfl" class="modal-wrapper modal-wrapper--salary-project" data-modal>
    <div class="modal">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <div class="modal__wrap">
            <div class="modal__header">
                <div class="modal__title">
                    Подключение к зарплатному проекту
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <p class="modal__text color-gray">
                        Если тебе нужна справка по форме 2-НДФЛ,  направь заявку бухгалтеру Людмиле Смирновой, указав в письме требуемый период (год).
                    </p>

                    <div class="card-user-big">
                        <div class="card-user-big__inner">
                            <div class="card-user-big__avatar">
                                <img src="/local/templates/infoland/assets/images/user-big-2.jpg" alt="Куликова Елена">
                            </div>
                            <div class="card-user-big__info">
                                <div class="card-user-big__name">Куликова Елена</div>
                                <div class="card-user-big__subname">Главный бухгалтер</div>
                                <div class="card-user-big__contacts">
                                    <a href="tel:+7 (915) 433-11-16" class="card-user-big__tel">+7 (915) 433-11-16</a>
                                    <a href="mailto:kulikova@infoland.ru">kulikova@infoland.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button" type="button">
                    <span>Отправить заявку</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div id="modal-event" class="modal-wrapper modal-wrapper--event" data-modal>
    <div class="modal modal--medium">
        <button type="button" class="modal__close j_closeModal">
            <svg class="svg cross" >
                <use xlink:href="svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <form class="modal__wrap" data-form>
            <div class="modal__header modal__header--column">
                <div class="modal__date">
                    6 апреля 2024
                </div>
                <div class="modal__title">
                    Совместный отдых на озере «Лесное»
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__content">
                    <img class="modal__poster" src="/local/templates/infoland/assets/images/modal-event-1.jpg" alt="Совместный отдых на озере «Лесное»">
                    <p class="modal__text color-gray">
                        Небесная сфера, это удалось установить по характеру спектра, выбирает спектральный класс. Межзвездная матеpия дает спектральный класс, хотя для имеющих глаза-телескопы туманность Андромеды показалась бы на небе величиной с треть ковша Большой Медведицы.
                    </p>
                </div>
            </div>

            <div class="modal__footer">
                <button class="modal__button button j_closeModal" type="button">
                    <span>Отлично!</span>
                </button>
            </div>
        </form>
    </div>
</div>
<div class="modal-wrapper modal-wrapper--video" id="modal-video" data-modal>
    <button class="button button-close j_closeModal">
        <svg class="button__icon">
            <use xlink:href="svg/sprite.svg#cross"></use>
        </svg>
    </button>

    <div class="modal modal--large modal--video">
        <div class="modal__wrap">
            <div class="modal__body">
                <div id="modal-about-video" class="plyr__video-embed j_player">

                    <video data-player-controls="player" class="plyr__video-embed" id="player" playsinline>
                        <source
                                src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                                type="video/mp4"
                        />
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-wrapper modal-wrapper--video modal-wrapper--docs" id="modal-docs" data-modal data-slider-container>
    <button class="button button-close j_closeModal">
        <svg class="button__icon">
            <use xlink:href="svg/sprite.svg#cross"></use>
        </svg>
    </button>

    <div class="modal modal--docs modal--video">
        <div class="modal__wrap">
            <div class="modal__body">
                <div id="" class="">
                    <div class="swiper" data-slider-docs>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-file-read">
                                    <img src="/local/templates/infoland/assets/images/doc-prev.jpg" alt="doc" class="card-file-read__image">

                                    <a href="#" download="" class="card-file-read__download button button--secondary">
                                        <svg class="svg dropdown__arrow">
                                            <use xlink:href="svg/sprite.svg#arrow-down-2"></use>
                                        </svg>
                                        <span>Скачать</span>
                                    </a>
                                </div>              </div>

                            <div class="swiper-slide">
                                <div class="card-file-read">
                                    <img src="/local/templates/infoland/assets/images/doc-prev.jpg" alt="doc" class="card-file-read__image">

                                    <a href="#" download="" class="card-file-read__download button button--secondary">
                                        <svg class="svg dropdown__arrow">
                                            <use xlink:href="svg/sprite.svg#arrow-down-2"></use>
                                        </svg>
                                        <span>Скачать</span>
                                    </a>
                                </div>              </div>
                        </div>

                        <div class="swiper-pagination swiper-pagination--number"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<!-- ./ End of Modals -->

</body>
</html>
