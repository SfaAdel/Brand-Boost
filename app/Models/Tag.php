<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model  implements TranslatableContract
{
    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

 

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_tag');
    }
}
