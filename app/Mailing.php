<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mailing extends Model
{
    use SoftDeletes;

    protected $dates = [
        'sent_at',
    ];

    public function subscribers()
    {
        return $this->belongsToMany(Subscriber::class);
    }

    public function hasBeenSent()
    {
        return !is_null($this->sent_at);
    }
}
