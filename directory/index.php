<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Справочник");
?>

<?php
$APPLICATION->IncludeComponent(
    "custom:user_search",
    "",
    [
        "SEARCH_QUERY" => htmlspecialchars($_GET['search_query']),
    ]
);
?>


<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>
