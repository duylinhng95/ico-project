<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDashboard extends Model
{
    protected $fillable = [
		'name', 'url'
    ];
    protected $table = 'user_dashboard';
}
