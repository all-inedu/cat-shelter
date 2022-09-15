<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'from',
        'email',
        'status',
    ];

    public function getUpdatedAtAttribute($value)
    {
        return date('d M Y H:i:s', strtotime($value));
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    public function replies()
    {
        return $this->hasOne(Replies::class, 'comment_id', 'id');
    }
}
