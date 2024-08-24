<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Web\Json;

CModule::IncludeModule("iblock");

$res = CIBlockElement::GetList(
    [],
    ['ID' => $_POST['id'], 'IBLOCK_ID' => 7],
    false,
    [],
    ['ID', 'NAME', 'PROPERTY_LIKES']
);

if($ob = $res->Fetch()){

    $oldValue = $ob['PROPERTY_LIKES_VALUE'];

    CIBlockElement::SetPropertyValuesEx($_POST['id'], false, array('LIKES' => $oldValue+1));

    echo Json::encode(['status' => 'success', 'likes' => $oldValue+1]);

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
