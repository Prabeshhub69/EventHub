<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'date',
        'time',
        'location',
        'image',
        'description',
        'price',
        'created_by',
    ];

    public function admin() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'event_user')->withTimestamps();
    }
}


