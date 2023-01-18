<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'umur',
        'graduate',
        'corporate',
        'position',
        // 'passwd',
        'email_verified_at'
    ];



}
