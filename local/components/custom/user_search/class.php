<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class UserSearchComponent extends CBitrixComponent
{
    protected function getUsers($searchQuery)
    {

        $result = [];

        if (!empty($searchQuery)){
            $filter = ["NAME" => $searchQuery];
        } else {
            $filter = [];
        }

        $select = ['ID'];

        $rsUsers = CUser::GetList(($by = "NAME"), ($order = "ASC"), $filter, ["SELECT" => $select]);

        while ($user = $rsUsers->Fetch()) {
            $result[] = [
                'NAME' => $user['NAME'],
                'PHOTO'=> CFile::GetPath($user["PERSONAL_PHOTO"]),
                'LASTNAME' => $user['LAST_NAME'],
                'EMAIL' => $user['EMAIL'],
                'PROFESSION' => $user['PERSONAL_PROFESSION'],
                'PHONE' => $user['PERSONAL_PHONE'],
                'ID' =>$user['ID']
            ];

        }

        return $result;
    }

    public function executeComponent()
    {

        $this->arResult['USERS'] = $this->getUsers($this->arParams['SEARCH_QUERY']);
        $this->includeComponentTemplate();
    }
}

