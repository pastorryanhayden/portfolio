<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsToMany(CaseStudy::class, $table = 'case_studies_categories');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
