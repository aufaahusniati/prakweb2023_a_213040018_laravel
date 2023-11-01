<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // $fillable yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // $guardedyang ga boleh di isi
    protected $guarded = ['id'];
}
