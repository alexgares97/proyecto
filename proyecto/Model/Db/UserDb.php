<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDb extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function insertUser($UserName, $Password)
    {
        User::create([
            'UserName' => $UserName,
            'Password' => $Password,
        ]);
    }

    public function getUser($UserName)
    {
        return User::where('UserName', $UserName)->first();
    }
}
