<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class AdminUser extends Model
{
    use HasUuids;

    protected $fillable = ['username', 'password'];
}