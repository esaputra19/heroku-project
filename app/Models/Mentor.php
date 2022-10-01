<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mentor',
        'umur',
        'occupation',
        'alumni',
        'lastwork',
        'job',
        'linkedin',
    ];



}
