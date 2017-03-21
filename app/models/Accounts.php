<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Accounts extends Eloquent
{
    public $name;
    
    public $timestamps = [];
    protected $fillable = ['name', 'login','sex','email','password'];

}