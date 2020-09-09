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
            $ccc .= '<option value="'.$counter->id.'">'.$counter->name.'</option>
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
                            <label for="recipient-name" class="col-form-label">Price:</label>
                            <input type="text" name="price" value="'.$stock->price.'" placeholder="Product" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Stock:</label>
                            <input type="text" name="stock" placeholder="Stock Number" class="form-control" id="recipient-name" required>
                        </div>
        ';
        return response($output);
    }
    public function closingStock(Request $request){
       $sales = new Sale();
       $getCounter = Counter::where('user_id',Auth::id())->first();
            $getTotalSale = Sale::where('counter_id',$getCounter->id)->first();
           $getProd = Stock::where('id', $request->name)->first();
           $getStock = Assign::where('name', $getProd->name)->first();
           if ($getStock->stock==0){
               return redirect()->back()->with('error', 'NO PRODUCT');

           }
           else {
               if ($getStock->stock < $request->sales) {
                   return redirect()->back()->with('error', 'NOT ENOUGH CONFIRM YOUR STOCK FIRST');

               }
               else {

                   $sales->counter_id = $getCounter->id;
                   $sales->name = $getProd->name;
                   $sales->closing_stock = $request->sales;
                   $sales->price = $request->price;
                   if (isset($getTotalSale->total)){
                       $getCurrentTotalSale = $getTotalSale->total;
                       $finalTotal = $getCurrentTotalSale+$request->sales*$request->price;
                       $updateSales = Sale::where('counter_id',$getCounter->id)->update(['total' => $finalTotal]);
                   }
                   else {
                       $sales->total = $request->sales * $request->price;
                   }
                   $sales->save();
                   $getCurrent = $getStock->stock;
                   $deductStock = $getCurrent - $request->sales;
                   $update = Assign::find($getStock->id);
                   $update->stock = $deductStock;
                   $update->save();
                   $delete = Assign::where('stock', 0)->delete();
               }
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
        $stock->stock = $request->stock;
        $stock->price = $request->price;
        $stock->save();
        return redirect()->back()->with('success','PRODUCT ADDED SUCCESSFULLY');

    }
    public function assignStock(Request $request){
        $stock = Stock::find($request->stockId);
        $assign = Assign::where('name',$stock->name)->first();
        if ($stock->stock<$request->stock){
            return redirect()->back()->with('error','PRODUCT NOT ENOUGH CONFIRM STOCK');

        }
        else {
            if (isset($assign)) {
                $totalStock = $assign->stock + $request->stock;
                $update = Assign::where('name', $stock->name)->update(['stock' => $totalStock]);
                $currentStock = $stock->stock;
                $deductStock = $currentStock - $request->stock;
                $stock->stock = $deductStock;
                $stock->save();
            } else {
                $assign = new Assign();
                $assign->counter_id = $request->counter_id;
                $assign->name = $request->name;
                $assign->size = $request->size;
                $assign->stock = $request->stock;
                $assign->price = $request->price;
                $assign->save();
                $currentStock = $stock->stock;
                $deductStock = $currentStock - $request->stock;
                $stock->stock = $deductStock;
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
                                                            <label for="recipient-name" class="col-form-label">Stock:</label>
                                                            <input type="text" name="stock" value="'.$stockId->stock.'" placeholder="Stock" class="form-control" id="recipient-name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Price:</label>
                                                            <input type="text" name="price" value="'.$stockId->price.'" placeholder="Product Price" class="form-control" id="recipient-name" required>
                                                        </div>
        ';
        return response($output);
    }
    public function editStock(Request $request){
        $edit = Stock::find($request->stockId);
        $edit->name = $request->name;
        $edit->size = $request->size;
        $edit->stock = $request->stock;
        $edit->price = $request->price;
        $edit->save();

        return redirect(url('stock'))->with('success','PRODUCT EDITED SUCCESSFULLY');
    }
}
