<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Service extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name', 'description' , 'unit_of_price'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

    public function freelancers()
    {
        return $this->belongsToMany(Freelancer::class, 'freelancer_services')
                    ->withPivot('price_per_unit');
    }

}
