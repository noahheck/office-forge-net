<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use SoftDeletes;

    protected $casts = [
        'verified' => 'boolean',
    ];

    public function mailings()
    {
        return $this->belongsToMany(Mailing::class, 'mailings_subscribers');
    }
}
