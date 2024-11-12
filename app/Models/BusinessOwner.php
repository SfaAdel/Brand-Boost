<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class BusinessOwner extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name', 'company_name'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

    public function fields()
    {
        return $this->belongsToMany(Field::class, 'field_business_owner');
    }

    public function favorites()
    {
        return $this->belongsToMany(Freelancer::class, 'fav_freelancers');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
