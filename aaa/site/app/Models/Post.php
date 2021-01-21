<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasFactory;
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $table = 'posts';

    protected $fillable = [
        'title', 'text', 'userId'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }
}
