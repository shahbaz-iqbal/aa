<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvDescription extends Model
{
    use HasFactory;
    protected $table = 'cv_description';

    protected $fillable = ['cv_id','description'];
}
