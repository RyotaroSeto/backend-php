<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Craftsman extends Model
{
    use HasFactory;

    protected $table = 'Craftsman';

    protected $fillable = [
        'craftsman_search_id',
        'user_id',
        'craftsman_search_body',
        'insert_time',
    ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
