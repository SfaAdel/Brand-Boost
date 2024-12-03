<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class BusinessOwner extends Authenticatable  implements TranslatableContract
{
    use HasApiTokens, HasFactory, Notifiable, Translatable;

    // Specify translatable attributes
    public $translatedAttributes = ['name', 'company_name'];

    // Guard the primary key field and other fields as needed
    protected $guarded = ['id'];

    // public function fields()
    // {
    //     return $this->belongsToMany(Field::class, 'field_business_owner');
    // }

    public function fields()
    {
        return $this->belongsTo(Field::class);
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
