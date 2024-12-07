<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Freelancer extends Authenticatable  implements TranslatableContract
{
    use HasApiTokens, HasFactory, Notifiable, Translatable;

    use HasFactory, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name', 'bio'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];


    // public function fields()
    // {
    //     return $this->belongsToMany(Field::class, 'field_freelancer');
    // }

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
        return $this->belongsToMany(BusinessOwner::class, 'favorite_freelancers');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'freelancer_services')
                    ->withPivot('price_per_unit');
    }

    public function projects()
    {
        return $this->hasManyThrough(
            FreelancerProject::class,
            FreelancerService::class,
            'freelancer_id',       // Foreign key on FreelancerService table
            'freelancer_service_id', // Foreign key on FreelancerProject table
            'id',                  // Local key on Freelancer table
            'id'                   // Local key on FreelancerService table
        );
    }
    



    public function orders()
{
    return $this->hasManyThrough(Order::class, FreelancerService::class, 'freelancer_id', 'freelancer_service_id');
}

}
