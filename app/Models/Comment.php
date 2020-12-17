<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'id', 'name', 'post_id', 'comment'
    ];

    public $timestemps = true;

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
