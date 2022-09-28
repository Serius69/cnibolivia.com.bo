<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/


    protected $fillable = [
        'title',
        'subtitle',
        'url',
        'path1',
        'path2',
        'status'

    ];


}
