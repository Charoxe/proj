<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Web\Json;

$userId = intval($_POST['user_id']);


$rsUser = CUser::GetByID($userId);
$user = $rsUser->Fetch();

if ($user) {
//    $photoPath = !empty($user['PERSONAL_PHOTO']) ? CFile::GetPath($user['PERSONAL_PHOTO']) : '1';

    // Выводим нужные поля пользователя
   $userData = [
       'FIO' => $user['NAME'].' '.$user['LAST_NAME'].' '.$user['SECOND_NAME'],
       'PHOTO' => CFile::GetPath($user['PERSONAL_PHOTO']),
       'EMAIL' => $user['EMAIL'],
       'PROFESSION' => $user['PERSONAL_PROFESSION'],
       'PHONE' => $user['PERSONAL_PHONE'],
       'BIRTHDAY' => FormatDate("d F", MakeTimeStamp($user['PERSONAL_BIRTHDAY'])),
       ];
}



$json = json_encode($userData);
echo $json;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>