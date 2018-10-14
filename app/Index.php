<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $fillable = [
        'section', 'name', 'content', 'url'
    ];
    protected $table = 'index';
}
