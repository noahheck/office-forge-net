<?php

namespace App;

use App\Traits\IsEditorResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes,
        IsEditorResource;

    protected $dates = [
        'date',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
