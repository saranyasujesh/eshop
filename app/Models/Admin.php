<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function role(): HasOne
    {
        return $this->hasOne(Role::class,'id','role_id');
    }
}
