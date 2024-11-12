<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class JobTitle extends Model implements TranslatableContract
{
    use HasFactory;

    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

    public function freelancers()
    {
        return $this->hasMany(FreelancerProject::class);
    }

}
