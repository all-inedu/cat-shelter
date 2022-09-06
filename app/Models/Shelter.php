<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'province',
        'city',
        'district',
        'sub_district',
        'postal_code',
        'status',
    ];

    public function cats()
    {
        return $this->hasMany(Cat::class, 'cat_id', 'id');
    }

}
