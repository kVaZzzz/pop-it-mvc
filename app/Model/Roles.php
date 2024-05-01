<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model 
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'ID_Role',
        'Name_Role'
    ];
}