<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<nav class="nav header__nav">
    <ul class="nav__list">
        <?php foreach ($arResult as $item) {

            $active = '';

            if($item['SELECTED'] == 1) {
                $active = 'active';
            }

            ?>
            <li class="nav__item">
                <a href="<?=$item['LINK']?>" class="nav__link <?=$active?>"><?=$item['TEXT']?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
