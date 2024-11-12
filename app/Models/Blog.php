<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Blog extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['main_title', 'short_description' ,'second_title' , 'long_description' ];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }
}
