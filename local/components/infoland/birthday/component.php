<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
function getUsersSortedByBirthday() {
    // Массив для хранения пользователей
    $sortedUsers = [];

    // Параметры фильтрации
    $filter = [
        'ACTIVE' => 'Y',
        '!PERSONAL_BIRTHDAY' => false, // Исключаем пользователей без даты рождения
    ];

    // Выборка полей
    $select = [
        'ID',
        'NAME',
        'LAST_NAME',
        'PERSONAL_BIRTHDAY'
    ];

    // Выполнение запроса
    $rsUsers = CUser::GetList(
        ($by="personal_birthday"),
        ($order="asc"),
        $filter,
        ['SELECT' => $select]
    );

    while ($arUser = $rsUsers->Fetch()) {
        $birthday = new DateTime($arUser['PERSONAL_BIRTHDAY']);


        // Получаем месяц и день рождения
        $birthdayMonth = $birthday->format('m');
        $birthdayDay = $birthday->format('d');

        // Создаем поле для сортировки
        $sortField = $birthdayMonth . $birthdayDay;

        // Добавляем поле сортировки к пользователю
        $arUser['SORT_FIELD'] = $sortField;

        // Добавляем пользователя в массив
        $sortedUsers[] = $arUser;
    }

    // Сортируем пользователей по полю SORT_FIELD
    usort($sortedUsers, function($a, $b) {
        return $a['SORT_FIELD'] <=> $b['SORT_FIELD'];
    });

    return $sortedUsers;
}

// Пример использования функции
$users = getUsersSortedByBirthday();

function isBirthdayInFuture($date)
{
    // Создаем объект текущей даты
    $currentDate = new DateTime();
    // Создаем объект даты для сравнения
    $birthdayDate = new DateTime($date);

    // Форматируем текущую дату и дату рождения только с месяцем и днем
    $currentMonthDay = $currentDate->format('m-d');
    $birthdayMonthDay = $birthdayDate->format('m-d');

    // Сравниваем месяц и день
    if ($birthdayMonthDay > $currentMonthDay) {
        return true;
    } else {
        return false;
    }
}

$count = 0;

foreach ($users as $user) {

    if($count >= 5) {
        break;
    }

    if(isBirthdayInFuture($user['PERSONAL_BIRTHDAY'])) {

        $arResult['USERS'][] = [
            'FIO' => $user['NAME'] . ' ' . $user['LAST_NAME'],
            'PHOTO' => CFile::GetPath($user["PERSONAL_PHOTO"]),
            'DATE' => FormatDate("d F", MakeTimeStamp($user['PERSONAL_BIRTHDAY']))
        ];

        $count++;
    }
}

$this->IncludeComponentTemplate();
?>