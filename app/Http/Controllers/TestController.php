<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use App\Models\User;

class TestController extends Controller
{
    public function accessor()
    {
      

        $user = User::find(1);
        $fullName =$user->last_name;
         
        dd($fullName);
    }

    public function helper()
    {
        $array = Arr::add(['name' => 'Desk'], 'price', 100);
        $array = Arr::add(['name' => 'Desk', 'price' => null], 'price', 100);

        $array = Arr::collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
 
        dd($array);
         
    }

    public function reusable()
    {
        $user_name = get_user_name(1);
        dd($user_name);
         
    }
}
