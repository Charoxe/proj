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

<!--    <div class="breadcrumbs ">-->
<!--        <ul class="breadcrumbs__list">-->
<!--            <li class="breadcrumbs__item">-->
<!--                <a href="#" class="breadcrumbs__link">Главная</a>-->
<!--            </li>-->
<!--            <li class="breadcrumbs__item">-->
<!--                <span class="breadcrumbs__link">Структура компании</span>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->

    <div class="main-content-field__head main-content-field__head--full">
        <h1>
            <?=$arResult ['NAME']?>
        </h1>
    </div>
    <div class="main-content-field__body">
        <div class="main-content-field__content main-content-field__content--full">
            <div class="tabs" data-tabs="test-tabs">
                <button class="button-tab active" data-tab="test-tab-1"> Все новости </button>
            </div>

            <div class="tabs-contents" data-tabs-contents="test-tabs">
                <div class="tab-content active" data-tab-content="test-tab-1">
                    <div class="main-content-field__grid main-content-field__grid--news">


                        <?php foreach ($arResult ['ITEMS'] as $item) { ?>
                        <div class="main-content-field__grid-item">
                            <div class="card-default ">
                                <div class="card-default__inner">

                                    <?php if ($item['PREVIEW_PICTURE']['SRC']) {?>

                                    <div class="card-default__head">
                                        <img src="<?= $item ['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                                    </div>

                                    <? } ?>


                                    <div class="card-default__body">

                                        <div class="card-default__tags">
                                  <span class="card-default__tag">
                                    <?= $item ['PROPERTIES']['CATEGORY']['VALUE'] ?>
                                  </span>
                                        </div>

                                        <a href="<?= $item ['DETAIL_PAGE_URL'] ?>" class="card-default__name">
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
                                                    <div class="reaction__number">15</div>
                                                </div>

                                                <div class="reaction reaction--favorite" data-favorite>
                                                    <div class="reaction__icon">
                                                        <svg class="svg favorite" >
                                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#favorite"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="reaction__number"><?= $item ['PROPERTIES']['LIKES']['VALUE'] ?></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>                      </div>






                        <?php } ?>
                    </div>


                    <?=$arResult['NAV_STRING']?>




                </div>

            </div>
        </div>
    </div>
</div>