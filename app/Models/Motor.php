<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'motors';
    protected $fillable = [
        'motor_tilpums',
        'motora_maks_jauda',
        'degviela_id',
    ];
}
