<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'address',
        'province',
        'city',
        'district',
        'sub_district',
        'postal_code',
        'status'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'adopter_id', 'id');
    }

}
