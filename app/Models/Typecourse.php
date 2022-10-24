<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typecourse extends Model
{
    use HasFactory;
    protected $table = 'typecourse';

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/


    protected $fillable = [
        'type',
        'status'
    ];
}
