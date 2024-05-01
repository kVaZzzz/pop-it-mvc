<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model 
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'ID_Doctor',
        'Surname',
        'Name',
        'Patronymic',
        'ID_Job_title',
        'Specialization'
    ];
}