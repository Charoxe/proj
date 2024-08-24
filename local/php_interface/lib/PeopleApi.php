<?php

namespace App;

use Bitrix\Main;

class PeopleApi
{
    private $requestUri;

    public function __construct() {

        $this->requestUri = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
    }

    public function get()
    {

        Main\Loader::includeModule('iblock');

        $query = end($this->requestUri);

        $table = '\Bitrix\Iblock\Elements\ElementManagersTable';

        $dbItems = $table::getList([
            'filter' => [
                '%NAME' => $query
            ],
            'select' => [
                'ID', 'NAME', 'PREVIEW_PICTURE', 'JOB_VAL' => 'JOB.VALUE', 'AGE_VAL' => 'AGE.VALUE'
            ],
            "cache" => ["ttl" => 3600],
        ]);

        $data = [];

        while($item = $dbItems->fetch()) {
            $data[] = [
                'id' => $item['ID'],
                'name' => $item['NAME'],
                'picture' => 'https://'.$_SERVER['HTTP_HOST'].\CFile::GetPath($item['PREVIEW_PICTURE']),
                'job' => $item['JOB_VAL'],
                'age' => $item['AGE_VAL'],
            ];
        }

        return $data;
    }

}