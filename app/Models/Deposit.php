<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function user_details()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function approved_by_user()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
