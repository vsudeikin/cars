<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Owner;

class IndexController extends Controller
{
   
    public function index($id = null)
    {
            
        if (isset($id)) {
            $owner = Owner::all();
            $vars = [
                'owner' => 'active',
                'list' => $owner,
                ];    
        } else {
            $car = Car::all();
            $vars = [
                'car' => 'active',
                'list' => $car,
                ];
        }
        
        return view('index')->with($vars);
    }
}
