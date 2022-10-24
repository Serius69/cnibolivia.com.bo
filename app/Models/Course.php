<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Typecourse;
class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/

    protected $fillable = [
        'name',
        'description',
        'date_publication',
        'url',
        'path',
        'status'
    ];     

    public function type()
    {
    return $this->belongsTo(Typecourse::class, 'type_id');
    }
}
