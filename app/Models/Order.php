<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
    ];

    public function cat()
    {
        return $this->belongsTo(Cat::class, 'cat_id', 'id');
    }

    public function adopter()
    {
        return $this->belongsTo(Adopter::class, 'adopter_id', 'id');
    }

    public function screening()
    {
        return $this->hasMany(Screening::class, 'order_id', 'id');
    }

}
