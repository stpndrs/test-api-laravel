<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * filllable
     *
     * @var array
     */
    // protected $fillable = [
    //     'title', 'content', 'image'
    // ];

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
