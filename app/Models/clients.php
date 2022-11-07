<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'pseudo','email','nom','password_client','photo_client','sexe_client','age_client','numero','securite'
    ];
}
