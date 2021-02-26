<?php

namespace App;

use Illuminate\Support\Str;
use NunoMaduro\Collision\Provider;

function format_date($date) {
    if (!$date) {
        return '';
    }

    if (   !($date->hour == 0
        && $date->minute == 0
        && $date->second == 0)
    ) {
        $date->setTimezone('America/Denver');
    }

    return $date->format('m/d/Y');
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
