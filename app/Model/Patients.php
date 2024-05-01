<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model 
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'ID_Patient',
        'Surname',
        'Name',
        'Patronymic'
        'Birthday'
    ];
}