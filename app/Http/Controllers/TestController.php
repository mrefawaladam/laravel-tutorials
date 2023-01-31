<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\TestJobs;
class TestController extends Controller
{
    public function accessor()
    {
      

        $user = User::find(1);
 
        $fullName =$user->last_name;

         
        dd($fullName);
    }

    /*
        Membuat Jobs Di panggil di bacground
    */
    public function queue()
    {
        $start_time = microtime(true);
        // start jobs
        $job = new TestJobs;
        $this->dispatch($job);
        // end jobs

        // tanpa menggunakan jobs
        // for($i = 0; $i < 1000000000; $i++) {
        // }

        $end_time = microtime(true);
        echo "Looping took " . ($end_time - $start_time) . " seconds.";
        
    }
}
