<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $tbl_users = [
        'name',
        'email',
        'tel',
        'pass',
        'role'
    ];
    use HasFactory;
}
