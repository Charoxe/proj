<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
    die();
}
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

//echo '<pre>';
//print_r($arResult);


?>



<div class="main__content-body main-content-field">

    <div class="main-content-field__head main-content-field__head--full">
        <a href="/docs/" class="main-content-field__back heading-back">
            <svg class="svg ">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#arrow-back"></use>
            </svg>

            <h1>
               <?=$arResult['SECTION']['PATH']['0']['NAME']?>

            </h1>
        </a>
    </div>
    <div class="main-content-field__body">
        <div class="main-content-field__content main-content-field__content--full">
            <div class="main-content-field__grid main-content-field__grid--no-margin">


                <? foreach ($arResult['ITEMS'] as $item) {
                        if (!$item ['PROPERTIES']['FILES']['VALUE']) {
                            continue;
                        }

                    $file = CFile::GetPath($item['PROPERTIES']['FILES']['VALUE']);

                    $extention = \Bitrix\Main\IO\Path::getExtension($file);

                    ?>
                <div class="main-content-field__grid-item main-content-field__grid-item--4 main-content-field__grid-item--docs-file">
                    <a href="<?=$file?>" type="button" class="card-file" download>
                        <div class="card-file__inner">
                            <div class="card-file__cell">

                                <? if ($extention === 'docx' || $extention === 'doc') {?>
                                <div class="card-file__icon">
                                    <svg class="svg">

                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#icon-doc"></use>
                                    </svg>
                                </div>
                                <? } ?>

                                <? if ($extention === 'xls' || $extention === 'xlsx') {?>
                                    <div class="card-file__icon">
                                        <svg class="svg">

                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#icon-xls"></use>
                                        </svg>
                                    </div>
                                <? } ?>






                            </div>
                            <div class="card-file__cell">
                                <div class="card-file__name"><?=$item['FIELDS']['NAME']?></div>
                            </div>
                        </div>
                    </a>                  </div>
                <?  } ?>

            </div>
        </div>
    </div>
</div>
