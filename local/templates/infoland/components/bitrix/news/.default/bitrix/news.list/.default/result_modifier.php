<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$data = $arResult;



$arResult = [];

$arResult['IBLOCK_NAME'] = $data['NAME'];

$categories = [];

foreach ($data['ITEMS'] as $result) {

    $categories[$result['PROPERTIES']['CATEGORY']['VALUE_XML_ID']] = [
        'TAB_CODE' => $result['PROPERTIES']['CATEGORY']['VALUE_XML_ID'],
        'TAB_NAME' => $result['PROPERTIES']['CATEGORY']['VALUE']
    ];

    $news[$result['PROPERTIES']['CATEGORY']['VALUE_XML_ID']][] = [

        'ID' => $result['FIELDS']['ID'],
        'CODE' => $result['FIELDS']['CODE'],
        'NAME' => $result['FIELDS']['NAME'],

        'DETAIL_PAGE_URL' => $result['DETAIL_PAGE_URL'],

        'DATE_CREATE' => $result['FIELDS']['DATE_CREATE'],
        'PREVIEW_PICTURE' => $result['FIELDS']['PREVIEW_PICTURE']['SRC'],
        'PREVIEW_TEXT' => $result['FIELDS']['PREVIEW_TEXT'],

        'CATEGORY_CODE' => $result['PROPERTIES']['CATEGORY']['VALUE_XML_ID'],
        'CATEGORY' => $result['PROPERTIES']['CATEGORY']['VALUE'],
        'LIKES' => $result['PROPERTIES']['LIKES']['VALUE']
    ];
}

foreach ($categories as $key => $tab) {
    $categories[$key]['ITEMS'] = $news[$key];
}

$arResult['NEWS']['TABS'] = $categories;





