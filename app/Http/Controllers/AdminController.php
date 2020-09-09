<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('admin.index',[
            'properties'=>$properties
        ]);
    }
}
