<?php

namespace App\Http\Controllers;

use App\Assign;
use App\Counter;
use App\Property;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class PropertyController extends Controller
{
    public function index($id){
        $propertyDetail = Property::find($id);
        $users = User::all();
        $stocks = Stock::all();
        $counters = Counter::where('property_id',$id)->get();
        return view('admin.propertyDetail',[
            'propertyDetail'=>$propertyDetail,
            'users'=>$users,
            'stocks'=>$stocks,
            'counters'=>$counters
        ]);
    }
    public function store(Request $request){
        $store = new Property();
        $store->name = $request->name;
        $store->location = $request->location;
        $store->save();
        return redirect()->back()->with('success','PROPERTY ADDED SUCCESSFULLY');

    }
    public function counterStore(Request $request){
        $store = new Counter();
        $store->name = $request->name;
        $store->user_id = $request->user_id;
        $store->property_id = $request->property_id;
        $store->save();
        return redirect()->back()->with('success','COUNTER ADDED SUCCESSFULLY');

    }
    public function getCounterDetail(Request $request){
        if ($request->ajax()){
            $output = "";
            $ccc = "";
            $ddd = "";

            $getCounter = Counter::find($request->counterId);
        }
        $user = User::find($getCounter->user_id);
        $alls = User::where('id','!=',$getCounter->user_id)->get();
        foreach ($alls as $all){
            $ddd = '<option value="'.$all->id.'">'.$all->name.'</option>';
        }
        $ccc = '<option value="'.$user->id.'">'.$user->name.'</option>';

        $output = '
        <input type="hidden" value="'.$getCounter->id.'" name="counterId">
                                                  <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Counter Name:</label>
                                                            <input type="text" name="name" value="'.$getCounter->name.'" placeholder="Counter Name" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Assigned Worker:</label>
                                                        <select class="form-control" name="user_id" id="exampleFormControlSelect1">
                                                        '.$ccc.'
                                                        '.$ddd.'
                                                        </select>

        ';
        return response($output);
    }
    public function counterDetail($id){
        $counter = Counter::find($id);
        $stocks = Assign::where('counter_id',$id)->get();
        return view('admin.counterDetail',[
            'counter'=>$counter,
            'stocks'=>$stocks
        ]);
    }
    public function edit(Request $request){
        $edit = Counter::find($request->counterId);
        $edit->name = $request->name;
        $edit->user_id = $request->user_id;
        $edit->save();

        return redirect()->back()->with('success','COUNTER DETAILS UPDATED SUCCESSFULLY');


    }
    public function deleteCounter($id){
        $delete = Counter::find($id);
        $delete->delete();
        return redirect()->back()->with('success','COUNTER DELETED SUCCESSFULLY');

    }
}
