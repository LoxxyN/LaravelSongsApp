<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable= [
        'artist',
        'title',
        'quantity',
        'img',
    ];

    // 1:M
    public function songs(): HasMany {
        return $this->hasMany(Song::class);
    }
}
