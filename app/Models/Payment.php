<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'txnid',
        'user_id',
        'amount',
        'status',
    ];

    protected $table = 'payments';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
