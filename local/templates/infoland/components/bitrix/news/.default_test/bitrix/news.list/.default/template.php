<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);



?>





<div class="main__content-body main-content-field">
    <div class="main-content-field__head">
        <h1>
            <?=$arResult ['NAME']?>
        </h1>
    </div>
    <div class="main-content-field__body">
        <div class="main-content-field__content">
            <div class="tabs" data-tabs="test-tabs">
                <button class="button-tab active" data-tab="test-tab-1"> Все новости </button>
            </div>

            <div class="tabs-contents" data-tabs-contents="test-tabs">
                <div class="tab-content active" data-tab-content="test-tab-1">
                    <div class="grid-field">
                        <div class="grid-field__head">
                            <div class="grid-field__row">

                            <?php foreach ($arResult ['ITEMS'] as $item) { ?>

                                <div class="grid-field__item">
                                    <div class="card-default ">
                                        <div class="card-default__inner">

                                            <div class="card-default__head">
                                                <img src=<?= $item ['PREVIEW_PICTURE']['SRC'] ?> alt="">
                                            </div>

                                            <div class="card-default__body">

                                                <div class="card-default__tags">
                                      <span class="card-default__tag">
                                        <?= $item ['PROPERTIES']['CATEGORY']['VALUE'] ?>
                                      </span>
                                                </div>

                                                <a href="#" class="card-default__name">
                                                    <?= $item ['NAME'] ?>
                                                </a>

                                                <div class="card-default__descr">
                                                    <?= $item ['PREVIEW_TEXT'] ?>
                                                </div>





                                                <div class="card-default__actions">
                                                    <time class="card-default__date"><?= $item ['DATE_CREATE'] ?></time>
                                                    <div class="card-default__reaction">
                                                        <div class="reaction">
                                                            <div class="reaction__icon">
                                                                <svg class="svg " >
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#message"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="reaction__number"></div>
                                                        </div>

                                                        <div class="reaction reaction--favorite" data-favorite>
                                                            <div class="reaction__icon">
                                                                <svg class="svg favorite" >
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#favorite"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="reaction__number"><?= $item ['FIELDS']['LIKES'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>                          </div>

                                <?php } ?>

                            </div>
                        </div>
                        <div class="grid-field__footer">
                            <a href="#" class="button button--secondary">Больше новостей</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-content-field__aside">

            <a href="#" class="card-vidget" data-modal-target='#modal-thankyou'>
                <div class="card-vidget__inner">
                    <div class="card-vidget__text">Скажи «Спасибо»</div>
                    <div class="card-vidget__icon">
                        <svg class="svg">
                            <use xlink:href="svg/sprite.svg#vidget-icon-1"></use>
                        </svg>
                    </div>
                </div>
            </a>

            <a href="#" class="card-vidget" data-modal-target='#modal-question'>
                <div class="card-vidget__inner">
                    <div class="card-vidget__text">Предложения и вопросы</div>
                    <div class="card-vidget__icon">
                        <svg class="svg">
                            <use xlink:href="svg/sprite.svg#vidget-icon-2"></use>
                        </svg>
                    </div>
                </div>
            </a>


            <div class="card-accordion active" data-accordion>
                <div class="card-accordion__top">
                    <div class="card-accordion__top-decor">
                        <svg class="svg " >
                            <use xlink:href="svg/sprite.svg#decor-1"></use>
                        </svg>
                        <span class="plus"></span>
                    </div>
                </div>
                <div class="card-accordion__footer">
                    <div class="card-accordion__head" data-accordion-button>
                        <div class="card-accordion__head-content">
                            <span>Именинники</span>
                        </div>
                    </div>
                    <div class="card-accordion__body" data-accordion-content>
                        <div class="card-accordion__body-inner">
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>      </div>
                    </div>
                </div>

            </div>
            <div class="card-accordion active" data-accordion>
                <div class="card-accordion__top">
                    <div class="card-accordion__top-decor">
                        <svg class="svg " >
                            <use xlink:href="svg/sprite.svg#decor-1"></use>
                        </svg>
                        <span class="plus"></span>
                    </div>
                </div>
                <div class="card-accordion__footer">
                    <div class="card-accordion__head" data-accordion-button>
                        <div class="card-accordion__head-content">
                            <span>Сегодня не в офисе</span>
                        </div>
                    </div>
                    <div class="card-accordion__body" data-accordion-content>
                        <div class="card-accordion__body-inner">
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="card-user-mini ">
                                <div class="card-user-mini__inner">
                                    <div class="card-user-mini__avatar">
                                        <img src="/local/templates/infoland/assets/images/user-2.jpg" alt="Амиров Алексей">
                                    </div>
                                    <div class="card-user-mini__info">
                                        <div class="card-user-mini__name">Амиров Алексей</div>
                                        <div class="card-user-mini__subname">21 марта</div>
                                    </div>
                                </div>
                            </a>      </div>
                    </div>
                </div>

            </div>
            <button type="button" class="card-info " data-modal-target="#modal-salary-project">
                <div class="card-info__inner">
                    <div class="card-info__icon">
                        <svg class="svg">
                            <use xlink:href="svg/sprite.svg#card-info-icon-1"></use>
                        </svg>
                    </div>
                    <div class="card-info__info">
                        <div class="card-info__name">Зарплатный проект</div>
                        <div class="card-info__descr">Как подключить</div>
                    </div>
                </div>
            </button>

            <button type="button" class="card-info " data-modal-target="#modal-ndfl">
                <div class="card-info__inner">
                    <div class="card-info__icon">
                        <svg class="svg">
                            <use xlink:href="svg/sprite.svg#card-info-icon-2"></use>
                        </svg>
                    </div>
                    <div class="card-info__info">
                        <div class="card-info__name">Справка 2-НДФЛ</div>
                        <div class="card-info__descr">Как оформить</div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</div>