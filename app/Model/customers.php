<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $filldata = ['id','name','phone','email','address','status','created_at','updated_at'];
}
