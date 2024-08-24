<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$html = '';

?>




<?php if($arResult['NavPageCount'] > 1) { ?>
<div class="pagination">
    <div class="pagination__inner">
        <a href="?PAGEN_<?=$arResult['NavNum']?>=<?=$arResult['NavPageNomer']-1?>" class="pagination__button button button--flat">
            <svg class="svg " >
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-left-middle"></use>
            </svg>
        </a>
    <?php for ($i = 1; $i <= $arResult['NavPageCount']; $i++) {

        $html .= '<a href="?PAGEN_'.$arResult['NavNum'].'='.$i.'" class="pagination__button button button--secondary' . (($i == $arResult['NavPageNomer']) ? 'active' : '') . '">'.$i.'</a>';

    }?>
        <?=$html?>

        <a href="?PAGEN_<?=$arResult['NavNum']?>=<?=$arResult['NavPageNomer']+1?>" class="pagination__button button button--flat">
            <svg class="svg " >
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-right-middle"></use>
            </svg>
        </a>
    </div>
</div>
<?php } ?>