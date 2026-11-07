<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    protected $table = 'songs';

    protected $fillable = [
        'name',
        'duration',
        'artist',
        'album_id',
    ];


    // M:1
    public function album(): BelongsTo {
        return $this->belongsTo(Album::class);
    }
}
