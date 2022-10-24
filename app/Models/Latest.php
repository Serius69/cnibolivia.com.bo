<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Typelatest;

class Latest extends Model
{
    use HasFactory;
    protected $table = 'latests';

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/

    protected $fillable = [
        'title',
        'description',
        'date_publication',
        'url',
        'path',
        'type_id',
        'status'
    ];

     

    public function type()
    {
    return $this->belongsTo(Typelatest::class, 'type_id');
    }

}
