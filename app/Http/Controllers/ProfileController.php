<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $getUserId = User::where('id',Auth::id())->first();
        return view('client.profile',[
            'getUserId'=>$getUserId
        ]);
    }
    public function adminProfile(){
        $getUserId = User::where('id',Auth::id())->first();
        return view('admin.profile',[
            'getUserId'=>$getUserId
        ]);
    }
    public function store(Request $request){
        $edit = User::find($request->userId);
        $edit->phone = $request->phone;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return redirect(url('counter'))->with('success','WORKER DETAILS UPDATED SUCCESSFULLY');

    }
    public function editAdminProfile(Request $request){
        $edit = User::find($request->user_id);
        $edit->phone = $request->phone;
        $edit->password= Hash::make($request->password);
        $edit->save();
        return redirect()->back()->with('success','DETAILS UPDATED SUCCESSFULLY');
    }
}
