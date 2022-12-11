<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iela extends Model
{
    use HasFactory;

    protected $table = 'ielas';
    protected $fillable = [
        'pilsetas_id',
        'iela',
    ];
}
