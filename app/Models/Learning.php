<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Types\This;

class Learning extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari','mentor',
        'judul','materi',
        'occupation','link',
    ];


}
