<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    use HasFactory;
    protected $table = 'legal_notice';

    protected $fillable = ['description'];
}
