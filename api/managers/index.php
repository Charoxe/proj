<?php
define("NO_KEEP_STATISTIC", true);
define("NO_AGENT_CHECK", true);
define("NEED_AUTH", false);
define("NOT_CHECK_PERMISSIONS", true);
define("CURRENT_USER", 1);

header('Access-Control-Allow-Origin: * ');
header('Access-Control-Allow-Methods: GET');
header("Access-Control-Allow-Headers: X-Requested-With");

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");

global $APPLICATION;

$api = new App\PeopleApi();

$APPLICATION->RestartBuffer();
header('Content-Type: application/json');

echo json_encode($api->get());