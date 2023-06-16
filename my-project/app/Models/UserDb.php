<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserDb extends Model
{
    protected $table = 'users';

    public function insertUser($UserName, $Password)
    {
        DB::table($this->table)->insert([
            'UserName' => $UserName,
            'Password' => $Password,
        ]);
    }

    public function getUser($UserName)
    {
        $userData = DB::table($this->table)->where('UserName', $UserName)->first();
        
        if ($userData) {
            $usrdata = new Usuario($UserName, $userData->Password);
            return $usrdata;
        }
        
        return null;
    }
}

