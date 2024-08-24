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






$nav = '';

foreach ($arResult as $key => $item) {
if($item === end($arResult)) {
$nav.= '<li class="breadcrumbs__item"><a class="breadcrumbs__link">'.$item['TITLE'].'</a></li>';
} else {
$nav.= '<li class="breadcrumbs__item"><a href="'.$item['LINK'].'" class="breadcrumbs__link">'.$item['TITLE'].'</a></li>';
}
}

$str = '<div class="main__content-body main-content-field">
<div class="breadcrumbs ">
    <ul class="breadcrumbs__list">
            '.$nav.'
    </ul>
</div>';

return $str;



