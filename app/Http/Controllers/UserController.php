<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $workers = User::all();
        $properties = Property::all();
        return view('admin.user',[
            'workers'=>$workers,
            'properties'=>$properties
        ]);
    }
    public function store(Request $request){
        $store = new User();
        $store->name = $request->name;
        $store->phone = $request->phone;
        $store->property_id = $request->property_id;
        $store->role = 1;
        $store->password = Hash::make(123456);
        $store->save();
        return redirect()->back()->with('success','WORKER ADDED SUCCESSFULLY');

    }
    public function getUserDetail(Request $request){
        if ($request->ajax()){
            $output = "";
            $opp ="";
            $user = User::find($request->userId);
            $properties = Property::where('id' ,'!=', $user->property_id)->get();
        }

        foreach ($properties as $property){
            $opp.= '
              <option value="'.$property->id.'">'.$property->name.'</option>

            ';
        }
        $output = '
<input type="hidden" value="'.$user->id.'" name="userId">
                                                  <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Name:</label>
                                                            <input type="text" name="name" value="'.$user->name.'" placeholder="Worker Name" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Phone Number:</label>
                                                            <input type="text" name="phone" value="'.$user->phone.'" placeholder="Phone Number" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Working Area:</label>
                                                             <select class="form-control" name="property_id" id="exampleFormControlSelect1">
                                                                  <option value="'.$user->property_id.'">'.$user->property->name.'</option>
                                                                    '.$opp.'

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Password:</label>
                                                            <input type="text" name="password" placeholder="Password" class="form-control" id="recipient-name">
                                                        </div>

        ';
        return response($output);
    }
    public function editUser(Request $request){
        $edit = User::find($request->userId);
        $edit->name = $request->name;
        $edit->phone = $request->phone;
        $edit->property_id = $request->property_id;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return redirect()->back()->with('success','WORKER EDITED SUCCESSFULLY');

    }
    public function deleteUser($id){
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('success','WORKER REMOVED SUCCESSFULLY');

    }
}
