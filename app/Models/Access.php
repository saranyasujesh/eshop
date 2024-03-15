<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Access extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'access';
    protected $guarded = [];

    public static function have_access($mid){
        $role_id = auth()->user()->role_id;
        
    }
}
