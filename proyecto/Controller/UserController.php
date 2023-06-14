<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDb;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginUser($userName, $password)
    {
        $user = $this->getUser($userName);
        
        $hashCode = hash('sha256', $password . "codeBreak");
        
        if (Hash::check($hashCode, $user->password)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function createUser($userName, $password)
    {
        $hashCode = hash('sha256', $password . "codeBreak");
        
        $user = new User();
        $user->UserName = $userName;
        $user->password = Hash::make($hashCode);
        $user->save();
    }
    
    public function getUser($userName)
    {
        return User::where('UserName', $userName)->first();
    }
    
    public function OLDloginUser($userName, $password)
    {
        $db = new UserDb();
        $userdb = $db->loginUser($userName);
        
        if ($password == $userdb.getPassword()) {
            session_start();
            $_SESSION["UserName"] = $userName;
            return true;
        } else {
            return false;
        }
    }
}
