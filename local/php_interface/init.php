<?php

if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/autoload.php");
}

define('DBOGDANOFF_VUE_MINIFY', 'hard');
define('DBOGDANOFF_VUE_PATH', '/components-vue');
