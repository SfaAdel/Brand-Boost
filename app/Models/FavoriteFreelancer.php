<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteFreelancer extends Model
{
    use HasFactory;

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }

    public function businessOwner()
    {
        return $this->belongsTo(BusinessOwner::class);
    }
}
