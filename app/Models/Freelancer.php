<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Freelancer extends Model implements TranslatableContract
{
    use HasFactory;

    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name', 'bio'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];


    public function fields()
    {
        return $this->belongsToMany(Field::class, 'field_freelancer');
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function favoriteByOwners()
    {
        return $this->belongsToMany(BusinessOwner::class, 'fav_freelancers');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'freelancer_services')
                    ->withPivot('price_per_unit');
    }

    public function projects()
    {
        return $this->hasMany(FreelancerProject::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
