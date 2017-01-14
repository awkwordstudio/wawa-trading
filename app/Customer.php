<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable= ['first_name','last_name','email','password','city','state','pincode','phone_number','billing_address','shipping_address'];
}
