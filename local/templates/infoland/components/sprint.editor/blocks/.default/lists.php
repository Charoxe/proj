<?php


if ($block ['settings']['type'] === 'ul') {
    $html = '<ul>';

    foreach ($block['elements'] as $item) {
        $html.= '<li>'.$item['text'].'</li>';
    }

    $html.= '</ul>';

    echo $html;
}

if ($block ['settings']['type'] === 'ol') {
    $html = '<ol>';

    foreach ($block['elements'] as $item) {
        $html.= '<li>'.$item['text'].'</li>';
    }

    $html.= '</ol>';

    echo $html;
}

?>


