<?php

namespace Globant\SharedModels;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'google', 'facebook', 'avatar'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
