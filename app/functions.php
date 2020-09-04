<?php

namespace App;

use Illuminate\Support\Str;

function temp_id() {
    return Str::uuid();
}

function safe_text_editor_content($content) {
    $allowedTags = ['div', 'h2', 'h3', 'br', 'a', 'strong', 'em', 'u', 'blockquote', 'pre', 'ul', 'ol', 'li', 'img', 'figure', 'figcaption'];
    $tagsStripped = strip_tags($content, '<' . implode('><', $allowedTags) . '>');
    return $tagsStripped;
}
