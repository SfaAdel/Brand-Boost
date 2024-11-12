<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use phpDocumentor\Reflection\Types\Self_;

class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['name', 'address'];
    // protected $fillable = ['id', 'logo', 'favicon', 'facebook', 'instagram', 'phone', 'email', 'whatsapp' , 'x' , 'tiktok' , 'youtube' , 'linkedin' , 'created_at', 'updated_at', 'deleted_at'];

    protected $guarded = ['id'];


}