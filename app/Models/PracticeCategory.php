<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeCategory extends Model
{
    use HasFactory;

    protected $table = 'cv_practice_category';

    protected $fillable = ['name'];
}
