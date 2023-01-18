<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Decision extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logic',
        'analyst',
        'preasure',
        'programming',
        'mathematic',
        'jalur',
        'job',
        'total',
        'waktu',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);

    }

    public function Score()
    {
        return $this->hasMany(Score::class);
    }
}
