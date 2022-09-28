<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'latests';

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/

    protected $fillable = [
        'name',
        'description',
        'date_registers',
        'url',
        'status',
        'path',
        'type_id'
    ];     

    public function type()
    {
    return $this->belongsTo(Typelatest::class, 'type_id');
    }
}
