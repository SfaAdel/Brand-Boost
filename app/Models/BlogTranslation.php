<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['main_title', 'short_description' ,'second_title' , 'long_description' ];
}
