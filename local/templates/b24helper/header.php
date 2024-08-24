<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
IncludeTemplateLangFile(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/_head.js');
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bundle.css');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bundle.js');

?>

<!DOCTYPE html>
<html data-theme="light" class="page page--finder">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />

    <!-- defaults -->
    <script>
        window.modalDefaults = {};

        window.dropdownDefaults = {};

        window.selectDefaults = {};
    </script>

    <title>finder</title>
    <?php $APPLICATION->ShowHead();?>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel();?></div>

