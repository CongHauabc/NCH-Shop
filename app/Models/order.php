<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $timestamps = false;
    protected $fillable =['customer_id','shipping_id','order_status','created_at'];
    protected $primaryKey = 'order_id';
    protected $table = 'tbl_order';
    
}