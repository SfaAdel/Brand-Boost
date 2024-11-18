<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function businessOwner()
    {
        return $this->belongsTo(BusinessOwner::class);
    }

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
}