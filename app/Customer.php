<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "customers";

    protected $fillable = [
        'name', 'document', 'email', 'address',
    ];
}
