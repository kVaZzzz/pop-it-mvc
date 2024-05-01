<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoitments extends Model 
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'ID_Emloyee',
        'ID_Patient',
        'Date_receipt',
        'Time_receipt',
        'Treatment',
        'ID_Appoitment'
    ];
}