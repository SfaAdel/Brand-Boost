<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class HeroSection extends Model implements TranslatableContract
{
    use HasFactory;
    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['h1','h2','p'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

}
