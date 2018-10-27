<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    protected $fillable = [
		'front', 'back', 'user_id'
    ];
    protected $table = 'kyc_image';
}
