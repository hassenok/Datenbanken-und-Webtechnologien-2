<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbUser extends Model
{
    use HasFactory;
    protected $table = 'ab_user';
    protected $fillable = [
        'id',
        'ab_name',
        'ab_password',
        'ab_email'
    ];
}
