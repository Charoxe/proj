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

    <div class="main-content-field__head main-content-field__head--article main-content-field__head--solo">
        <a href="/" class="main-content-field__back heading-back">
            <svg class="svg " >
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#arrow-back"></use>
            </svg>

            <h1>
                <?=$arResult['NAME']?>
            </h1>
        </a>

        <div class="main-content-field__head-row">
            <div class="main-content-field__info">
                <div class="main-content-field__info-article">
                    <time datetime="2016-11-18T09:54"><?=$arResult['TIMESTAMP_X']?></time>
                    <div class="tags">
                        <a href="/" class="tag">Инфолэнд</a>
                    </div>
                </div>

                <div class="reactions">
                    <div class="reaction">
                        <div class="reaction__icon">
                            <svg class="svg " >
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#message"></use>
                            </svg>
                        </div>
                        <div class="reaction__number">15</div>
                    </div>

                    <div class="reaction reaction--favorite" data-favorite>
                        <div class="reaction__icon">
                            <svg class="svg favorite" >
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#favorite"></use>
                            </svg>
                        </div>
                        <div class="reaction__number"><?=$arResult['PROPERTIES']['LIKES']?></div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="main-content-field__body">
        <div class="main-content-field__content main-content-field__content--solo">


            <div class="article">





                <div class="article__body">
                    <?
                    $APPLICATION->IncludeComponent(
                        "sprint.editor:blocks",
                        ".default",
                        Array(
                            "ELEMENT_ID" => $arResult['ID'],
                            "IBLOCK_ID" => $arResult ['IBLOCK_ID'],
                            "PROPERTY_CODE" => "EDITOR",
                        ),
                        $component,
                        Array(
                            "HIDE_ICONS" => "Y"
                        )

                    );
                    ?>
                </div>








                <div class="article__footer">
                    <div class="main-content-field__head-row">
                        <div class="main-content-field__info">
                            <div class="main-content-field__info-article">
                                <time datetime="2016-11-18T09:54"><?=$arResult['TIMESTAMP_X']?></time>
                                <div class="tags">
                                    <a href="/" class="tag">Инфолэнд</a>
                                </div>
                            </div>

                            <div class="reactions">
                                <div class="reaction">
                                    <div class="reaction__icon">
                                        <svg class="svg " >
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#message"></use>
                                        </svg>
                                    </div>
                                    <div class="reaction__number">15</div>
                                </div>

                                <div class="reaction reaction--favorite" data-favorite>
                                    <div class="reaction__icon">
                                        <svg class="svg favorite" >
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#favorite"></use>
                                        </svg>
                                    </div>
                                    <div class="reaction__number"><?=$arResult['PROPERTIES']['LIKES']?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>


