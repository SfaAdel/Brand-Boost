<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Title extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['title', 'short_description' ,'long_description'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

}
