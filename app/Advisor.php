<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    protected $fillable = [
		'name', 'position', 'description', 'avatar', 'link'
    ];
    protected $table = 'advisor';
}
