<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'tipo_users_id'
    ];

    protected $table = 'tipos_users';
}
