<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_title extends Model 
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'ID_Job_title',
        'Name_Job_title',
    ];
}