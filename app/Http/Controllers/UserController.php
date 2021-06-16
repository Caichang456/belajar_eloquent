<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    public function insertRecod(){
        $phone=new Phone();
        $phone->phone="089644978904";
        $user=new User();
        $user->name="Candra";
        $user->email="liaocandra456@yahoo.com";
        $user->password=encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record has been created successfully";
    }
    public function fetchPhoneByUser($id){
        $phone=User::find($id);
        return $phone;
    }
}
