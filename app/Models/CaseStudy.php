<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsToMany(Category::class, $table = 'case_studies_categories');
    }
}
