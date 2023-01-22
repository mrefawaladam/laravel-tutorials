<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TestController extends Controller
{
    public function accessor()
    {
      

        $user = User::find(1);
        $fullName =$user->last_name;
         
        dd($fullName);
    }
}
