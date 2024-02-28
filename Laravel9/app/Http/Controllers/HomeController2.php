<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class HomeController2 extends Controller
{
    /**
     * Handle the incoming request.
     */
    
    public function __invoke($id)
    {
        //return $var . " this is a variable";
            $data5 = order::find($id);
            $data5-> delete();
            return redirect('/order');
              
    }
}
