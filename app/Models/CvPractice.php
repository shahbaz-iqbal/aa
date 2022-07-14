<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PracticeCategory;
class CvPractice extends Model
{
    use HasFactory;
    protected $table = 'cv_practice';

    protected $fillable = ['cv_id','practice_category_id','description'];

    public function category()
    {
        return $this->belongsTo(PracticeCategory::class,'practice_category_id','id');
    }
}
