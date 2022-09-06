<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'weight',
        'description',
        'status',
    ];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class, 'shelter_id', 'id');
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'cat_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }

}
