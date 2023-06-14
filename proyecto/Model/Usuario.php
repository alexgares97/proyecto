<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'UserName',
        'Password',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function setUserName($UserName)
    {
        $this->attributes['UserName'] = $UserName;
    }

    public function setPassword($Password)
    {
        $this->attributes['Password'] = $Password;
    }

    public function getUserName()
    {
        return $this->attributes['UserName'];
    }

    public function getPassword()
    {
        return $this->attributes['Password'];
    }
}
