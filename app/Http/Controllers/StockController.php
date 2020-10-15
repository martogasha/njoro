<?php

namespace App\Http\Controllers;

use App\Assign;
use App\Counter;
use App\Sale;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\IFTTTHandler;
use PHPUnit\Framework\Constraint\Count;

class StockController extends Controller
{
    public function index(){
        $stocks = Stock::all();
        $counters = Counter::all();
        return view('admin.stock',[
            'stocks'=>$stocks,
            'counters'=>$counters
        ]);
    }
    public function getStock(Request $request){
        if ($request->ajax()){
            $stock = Stock::find($request->stockId);
            $counters = Counter::all();
            $output = "";
            $ccc = "";
        }
        foreach ($counters as $counter){
            $ccc .= '<option value="'.$counter->id.'"><b>'.$counter->property->name.'</b>('.$counter->name.')</option>
';
        }
        $output = '<input type="hidden" name="stockId" value="'.$stock->id.'"

                             <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Counter:</label>
                            <select class="form-control" name="counter_id" id="exampleFormControlSelect1">
                            '.$ccc.'
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Product:</label>
                            <input type="text" name="name" value="'.$stock->name.'" placeholder="Product" class="form-control" id="recipient-name">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Size:</label>
                            <input type="text" name="size" value="'.$stock->size.'" placeholder="Product" class="form-control" id="recipient-name">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Carton Price:</label>
                            <input type="text" name="carton_price" value="'.$stock->carton_price.'" placeholder="Carton Price" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Pieces Price:</label>
                            <input type="text" name="pieces_price" value="'.$stock->pieces_price.'" placeholder="Pieces Price" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Cartons/Crates:</label>
                            <input type="text" name="carton" placeholder="Cartons" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Pieces:</label>
                            <input type="text" name="pieces" placeholder="Pieces" class="form-control" id="recipient-name">
                        </div>
        ';
        return response($output);
    }
    public function closingStock(Request $request){
       $getCounter = Counter::where('user_id',Auth::id())->first();
           $getProd = Stock::where('id', $request->stockId)->first();
           $getStock = Assign::where('name', $getProd->name)->where('counter_id',$getCounter->id)->first();
               if ($getStock->carton < $request->carton) {
                   return redirect()->back()->with('error', 'NOT ENOUGH CONFIRM YOUR STOCK FIRST');
               }
               elseif ($getStock->pieces < $request->pieces) {
                   return redirect()->back()->with('error', 'NOT ENOUGH CONFIRM YOUR STOCK FIRST');
               }
               else {
                   $getPrices = Assign::where('name', $getProd->name)->first();

                   $sales = new Sale();
                   $sales->counter_id = $getCounter->id;
                   $sales->name = $getProd->name;
                   $sales->carton = $request->carton;
                   $sales->pieces = $request->pieces;
                   $sales->carton_price = $getPrices->carton_price;
                   $sales->pieces_price = $getPrices->pieces_price;
                   $sales->save();
                   $getCartons = $getStock->carton;
                   $deductCartons = $getCartons - $request->carton;
                   $getPieces = $getStock->pieces;
                   $deductPieces = $getPieces - $request->pieces;
                   $update = Assign::find($getStock->id);
                   $update->carton = $deductCartons;
                   $update->pieces = $deductPieces;
                   $update->save();
                   $delete = Assign::where('carton', 0)->where('pieces',0)->delete();

               }
           return redirect()->back()->with('success', 'CLOSING STOCK SUCCESSFULLY SAVED');

    }
    public function getProdDetails(Request $request){
        if ($request->ajax()){
            $output = "";
            $getProd = Stock::find($request->prodId);
        }
        $output = $getProd->price;
        return response($output);
    }
    public function store(Request $request){
        $stock = new Stock();
        $stock->name = $request->name;
        $stock->size = $request->size;
        $stock->carton = $request->carton;
        $stock->pieces = $request->pieces;
        $stock->carton_price = $request->carton_price;
        $stock->pieces_price = $request->pieces_price;
        $stock->save();
        return redirect()->back()->with('success','PRODUCT ADDED SUCCESSFULLY');

    }
    public function assignStock(Request $request){
        $stock = Stock::find($request->stockId);
        $assign = Assign::where('counter_id',$request->counter_id)->first();
        if ($stock->carton<$request->carton){
            return redirect()->back()->with('error','PRODUCT NOT ENOUGH CONFIRM STOCK');
        }
        elseif($stock->pieces<$request->pieces){
            return redirect()->back()->with('error','PRODUCT NOT ENOUGH CONFIRM STOCK');
        }
        else {
            if (isset($assign)) {
                $totalCarton = $assign->carton + $request->carton;
                $totalPieces = $assign->pieces + $request->pieces;
                $update = Assign::where('name', $stock->name)->update(['carton' => $totalCarton]);
                $update = Assign::where('name', $stock->name)->update(['pieces' => $totalPieces]);
                $currentCarton = $stock->carton;
                $currentPieces = $stock->pieces;
                $deductCartons = $currentCarton - $request->carton;
                $deductPieces = $currentPieces - $request->pieces;
                $stock->carton = $deductCartons;
                $stock->pieces = $deductPieces;
                $stock->save();
            } else {
                $assign = new Assign();
                $assign->counter_id = $request->counter_id;
                $assign->name = $request->name;
                $assign->size = $request->size;
                $assign->carton = $request->carton;
                $assign->pieces = $request->pieces;
                $assign->carton_price = $request->carton_price;
                $assign->pieces_price = $request->pieces_price;
                $assign->save();
                $currentCartons = $stock->carton;
                $currentPieces = $stock->pieces;
                $deductCarton = $currentCartons - $request->carton;
                $deductP = $currentPieces - $request->pieces;

                $stock->carton = $deductCarton;
                $stock->pieces = $deductP;

                $stock->save();
            }
        }
        return redirect()->back()->with('success','STOCK ASSIGNED SUCCESSFULLY');
    }
    public function getStockDetail(Request $request){
        if ($request->ajax()){
            $stockId = Stock::find($request->stockId);
            $output = "";
        }
        $output = '
                                                <input type="hidden" value="'.$stockId->id.'" name="stockId">
                                                  <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Product Name:</label>
                                                            <input type="text" name="name" value="'.$stockId->name.'" placeholder="Product Name" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Size:</label>
                                                            <input type="text" name="size" value="'.$stockId->size.'" placeholder="Product Description" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Carton Price:</label>
                                                            <input type="text" name="carton_price" value="'.$stockId->carton_price.'" placeholder="Product Price" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Pieces Price:</label>
                                                            <input type="text" name="pieces_price" value="'.$stockId->pieces_price.'" placeholder="Product Price" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Cartons/Crates:</label>
                                                            <input type="text" name="carton" value="'.$stockId->carton.'" placeholder="Cartons" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Pieces:</label>
                                                            <input type="text" name="pieces" value="'.$stockId->pieces.'" placeholder="Pieces" class="form-control" id="recipient-name" required>
                                                        </div>

        ';
        return response($output);
    }
    public function editStock(Request $request){
        $edit = Stock::find($request->stockId);
        $edit->name = $request->name;
        $edit->size = $request->size;
        $edit->carton = $request->carton;
        $edit->pieces = $request->pieces;
        $edit->carton_price = $request->carton_price;
        $edit->pieces_price = $request->pieces_price;
        $edit->save();

        return redirect(url('stock'))->with('success','PRODUCT EDITED SUCCESSFULLY');
    }
}
