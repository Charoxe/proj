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


<div class="card-accordion active" data-accordion>
    <div class="card-accordion__top">
        <div class="card-accordion__top-decor">
            <svg class="svg " >
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#decor-1"></use>
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
                <?php foreach ($arResult['USERS'] as $user) { ?>
                    <a href="#" class="card-user-mini ">
                        <div class="card-user-mini__inner">
                            <div class="card-user-mini__avatar">
                                <img src="<?=$user['PHOTO']?>" alt="<?=$user['FIO']?>">
                            </div>
                            <div class="card-user-mini__info">
                                <div class="card-user-mini__name"><?=$user['FIO']?></div>
                                <div class="card-user-mini__subname"><?=$user['DATE']?></div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

</div>