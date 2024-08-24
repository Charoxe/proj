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



//фильтру указываем ID раздела и ID его инфоблока
$arFilter = array('IBLOCK_ID' => 8);
$arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'SECTION_PAGE_URL', 'DESCRIPTION');
$rsSect = CIBlockSection::GetList(
    Array("SORT"=>"ASC"), //сортировка
    $arFilter, //фильтр (выше объявили)
    false, //выводить количество элементов - нет
    $arSelect //выборка вывода, нам нужно только название, описание, картинка
);
while ($arSect = $rsSect->GetNext()) {
    $data[] = $arSect;
}

?>

<div class="main__content-body main-content-field">


    <div class="main-content-field__head main-content-field__head--full">
        <h1>
            Документы и файлы
        </h1>
    </div>
    <div class="main-content-field__body">
        <div class="main-content-field__content main-content-field__content--full">
            <div class="main-content-field__grid main-content-field__grid--no-margin">


            <? foreach ($data as $item){  ?>
                <div class="main-content-field__grid-item">
                    <a href="<?=$item['SECTION_PAGE_URL']?>" class="card-service-docs">
                        <div class="card-service-docs__inner">
                            <div class="card-service-docs__cell">
                                <div class="card-service-docs__icon">
                                    <svg class="svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#docs-icon-1"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-service-docs__cell">
                                <div class="card-service-docs__name"><?=$item['NAME']?></div>
                                <div class="card-service-docs__descr "><?=$item['DESCRIPTION']?></div>
                            </div>
                        </div>

                        <svg class="svg card-service-docs__decor">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#docs-decor"></use>
                        </svg>
                    </a>
                </div>
                <? } ?>



            </div>
        </div>
    </div>


</div>








