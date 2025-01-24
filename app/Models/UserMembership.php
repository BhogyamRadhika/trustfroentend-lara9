<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMembership extends Model
{
    use HasFactory;
    protected $table='user_memberships';
    protected $fillable=['user_id','user_email','paid_at','created_at','amount','plan','updated_at'];
}
