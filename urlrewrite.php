<?php
$arUrlRewrite = array(
    0 =>
        array(
            'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
            'RULE' => 'componentName=$1',
            'ID' => NULL,
            'PATH' => '/bitrix/services/mobileapp/jn.php',
            'SORT' => 100,
        ),
    1 =>
        array(
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
    2 =>
        array(
            'CONDITION' => '#^/p/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/index.php',
            'SORT' => 100,
        ),
    3 =>
        array(
            'CONDITION' => '#^/api/managers/#',
            'RULE' => '',
            'PATH' => '/api/managers/index.php',
        ),
    4 =>
        array(
            'CONDITION' => '#^/news/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/news/index.php',
            'SORT' => 100,
        ),
    5 =>
        array(
            'CONDITION' => '#^/docs/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/docs/index.php',
            'SORT' => 100,
        ),
);
