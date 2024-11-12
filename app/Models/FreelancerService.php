<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerService extends Model
{
    use HasFactory;

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
