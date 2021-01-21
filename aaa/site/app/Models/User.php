<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   // use HasFactory;
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $table = 'users';

    protected $fillable = [
        'name', 'surname', 'email', 'phone_number', 'address', 'birthday'
    ];
}
