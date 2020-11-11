<?php

namespace App;

use Illuminate\Support\Str;

function format_date($date) {
    if (!$date) {
        return '';
    }

    return $date->setTimezone('America/Denver')->format('m/d/Y');
}

function format_datetime($datetime) {
    if (!$datetime) {
        return '';
    }

    $datetime = $datetime->setTimezone('America/Denver');

    $return = $datetime->format('m/d/Y g:ia');
    $isDst = $datetime->isDST();

    $return .= ($isDst) ? ' MDT' : ' MST';

    return $return;
}

function temp_id() {
    return Str::uuid();
}

function safe_text_editor_content($content) {
    $allowedTags = ['div', 'h2', 'h3', 'br', 'a', 'strong', 'em', 'u', 'blockquote', 'pre', 'ul', 'ol', 'li', 'img', 'figure', 'figcaption'];
    $tagsStripped = strip_tags($content, '<' . implode('><', $allowedTags) . '>');
    return $tagsStripped;
}
