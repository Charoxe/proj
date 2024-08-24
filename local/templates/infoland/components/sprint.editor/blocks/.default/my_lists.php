<?php
$html = '<div class="list">';

$html.= '<b>'.$block['textOne']['value'].'</b>';

if ($block ['settings']['type'] === 'ul') {

    $html .= '<ul>';

    foreach ($block['textTwo']['elements'] as $item) {
        $html.= '<li>'.$item['text'].'</li>';
    }

    $html.= '</ul>';
}

if ($block ['settings']['type'] === 'ol') {

    $html .= '<ol>';

    foreach ($block['textTwo']['elements'] as $item) {
        $html.= '<li>'.$item['text'].'</li>';
    }

    $html.= '</ol>';
}

$html .= '</div>';

echo $html;

?>