<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typelatest extends Model
{
    use HasFactory;
    protected $table = 'typelatest';

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
