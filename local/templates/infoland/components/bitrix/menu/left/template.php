<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>

<div class="aside-menu__body">
    <nav class="aside-nav aside-menu__nav">
        <ul class="aside-nav__list">
            <?php foreach ($arResult as $item) {

                $active = '';

                if($item['SELECTED'] == 1) {
                    $active = 'active';
                }

                ?>
                <li class="aside-nav__item">
                <a href="<?=$item['LINK']?>" class="aside-nav__link <?=$active?>">
                    <svg class="svg aside-nav__icon" >
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#<?=$item['PARAMS']['ICON']?>"></use>
                    </svg>
                    <span><?=$item['TEXT']?></span>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>    </div>