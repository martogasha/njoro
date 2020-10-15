<?php

namespace App\Http\Controllers;

use App\Counter;
use App\Processed;
use App\Sale;
use App\Stock;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        $stocks = Sale::all()->unique('counter_id');

        return view('admin.sales',[
            'stocks'=>$stocks,
        ]);
    }
    public function getSales(Request $request){
        $output = "";
        $total = "";
        $ccc = "";
        $sales = Sale::where('counter_id',$request->counterId)->get();
        foreach ($sales as $sale) {
            $cartonTotal=$sale->carton*$sale->carton_price;
            $piecesTotal=$sale->pieces*$sale->pieces_price;
            $total=$cartonTotal+$piecesTotal;
            $ccc.='
                         <tr>
                         <input type="hidden" name="saleId" value="'.$sale->id.'">
                          <td>'.$sale->name.'</td>
                          <td>'.$sale->carton.'</td>
                            <td>'.$sale->pieces.'</td>
                          <td>@'.$sale->pieces_price.'</td>
                          <td>Ksh:'.$total.'</td>
                        </tr>
            ';
        }
            $output = '
                    <table class="table table-dark">
                      <thead>
                        <tr>

                          <th scope="col">Name</th>
                          <th scope="col">Cartons/Crate</th>
                            <th scope="col">Pieces</th>
                          <th scope="col">Price</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                       '.$ccc.'
                      </tbody>
                    </table>
        ';

        return response($output);
    }
    public function processPayment(Request $request){
        $getSales = Sale::where('id',$request->saleId)->get();
        foreach ($getSales as $getSale){
            $store = new Processed();
            $store->counter_id = $getSale->counter_id;
            $store->name = $getSale->name;
            $store->size = $getSale->size;
            $store->carton = $getSale->carton;
            $store->pieces = $getSale->pieces;
            $store->carton_price = $getSale->carton_price;
            $store->pieces_price = $getSale->pieces_price;
            $store->save();
        }
        $deleteSales = Sale::where('id',$request->saleId)->delete();
        return redirect()->back()->with('success','SALES SUCCESSFULLY PROCESSED');
    }
    public function processedSales(){
        $stocks = Processed::all();
        return view('admin.processedSales',[
            'stocks'=>$stocks
        ]);
    }
}
