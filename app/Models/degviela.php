<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class degviela extends Model
{
    use HasFactory;

    protected $table = 'degvielas';
    protected $fillable = [
        'degvielas_veids',
    ];
}
