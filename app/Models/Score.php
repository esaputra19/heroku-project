<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa',
        'harian',
        'uts',
        'uas',
        'kehadiran',
    ];

    public function Decision()
    {
        return $this->belongsToMany(Decision::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
