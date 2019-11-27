<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as  Authenticatable;
class UserModel extends Authenticatable
{
    protected $table = 'admins';
    public $timestamps = true;
}
