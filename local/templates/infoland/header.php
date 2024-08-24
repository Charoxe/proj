<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?
CJSCore::Init(array("jquery"));
?>
<?php

IncludeTemplateLangFile(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/_head.js');
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bundle.css');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bundle.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom.js');


?>


<!DOCTYPE html>
<style>
::selection {
background: #809778; /* Цвет фона */
color: #fff; /* Цвет текста */
}
</style>
<html data-theme="light" class="page page--index" >
<head>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />

    <title><?php $APPLICATION->ShowTitle()?></title>
    <?php $APPLICATION->ShowHead();?>
    <? $page = $APPLICATION->GetCurPage();

    ?>

    <!-- defaults -->
    <script>
        window.modalDefaults = {};

        window.dropdownDefaults = {};

        window.selectDefaults = {};
    </script>

    </head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
<div class="content">
    <main class="main">

        <aside class="aside-menu main__aside">
            <div class="aside-menu__inner">
                <div class="aside-menu__head">
                    <a href="/" class="logo">
                        <svg class="svg logo__icon" >
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#logo"></use>
                        </svg>
                    </a>
                </div>

                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "left",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "left",
                        "USE_EXT" => "N"
                    )
                );
                ?>

            </div>
        </aside>

        <div class="main__content">
            <div class="main__content-header">
                <!-- header -->
                <header class="header">
                    <div class="container">
                        <div class="header__inner">
                            <form class="search-form-input">
                                <div class="search-form-input__field">
                                    <div class="input-wrapper search-form-input__input-wrapper">
                                        <div class="input-container">
                                            <input type="text" class="input" placeholder="Введите слово или фразу">
                                        </div>
                                    </div>

                                    <button type="submit" class="search-form-input__button button button--flat">
                                        <svg class="svg logo__icon" >
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/svg/sprite.svg#glass"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>

                            <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "top",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N"
                                )
                            );
                            ?>

                            <div class="header__action">
                                <div class="weather header__weather">
                                    <div class="weather__inner">
                                        <div class="weather__cell">
                                            <div class="weather__icon">
                                                <img src="/local/templates/infoland/assets/images/weather.png" alt="weather">
                                            </div>
                                        </div>
                                        <div class="weather__cell">
                                            <div class="weather__city">Москва,</div>
                                            <div class="weather__temperature">0°C</div>
                                        </div>
                                    </div>
                                </div>        <div class="exchange-rates">
                                    <div class="exchange-rates__inner">
                                        <div class="exchange-rates__row">USD 90.82</div>
                                        <div class="exchange-rates__row">EUR 99.03</div>
                                    </div>
                                </div>        <div class="user header__user">
                                    <img src="/local/templates/infoland/assets/images/user.jpg" alt="user" class="user__img">
                                </div>      </div>
                        </div>
                    </div>
                </header>
            </div>


            <?php if($page != '/index.php') {

                $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    ".default",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                );

            }
            ?>
