<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDetail extends Model
{
    use HasFactory;

    protected $table = 'team_details';

    protected $guarded = ['id'];
}
