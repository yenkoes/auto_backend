<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilseta extends Model
{
    use HasFactory;

    protected $table = 'pilsetas';
    protected $fillable = [
        'pilseta',
    ];
}
