<?php

namespace App;

use App\Contact\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $casts = [
        'unread' => 'boolean',
        'done' => 'boolean',
    ];

    public function scopeUnread($query)
    {
        return $query->where('unread', true);
    }

    public function scopeOpen($query)
    {
        return $query->where('completed', false);
    }

    public function scopeCompleted($query)
    {
        return $query->where('completed', true);
    }

    public function notes()
    {
        return $this->hasMany(Note::class, 'contact_id');
    }
}
