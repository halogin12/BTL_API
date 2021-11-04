<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $filldata = ['id','customer_id','total_price','note','key_token','status','created_at','updated_at'];
}
