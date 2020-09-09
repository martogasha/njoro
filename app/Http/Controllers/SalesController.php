<?php

namespace App\Http\Controllers;

use App\Counter;
use App\Sale;
use App\Stock;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        $stocks = Sale::all()->unique('counter_id');
        $total = Sale::all()->sum('total');

        return view('admin.sales',[
            'stocks'=>$stocks,
            'total'=>$total

        ]);
    }
    public function getSales(Request $request){
        $output = "";
        $total = "";
        $ccc = "";
        $sales = Sale::where('counter_id',$request->counterId)->get();
        foreach ($sales as $sale) {
            $ccc.='
                         <tr>
                          <td>'.$sale->name.'</td>
                          <td>'.$sale->closing_stock.'pieces</td>
                          <td>@'.$sale->price.'</td>
                          <td>Ksh:'.$sale->price*$sale->closing_stock.'</td>
                        </tr>
            ';
        }
            $output = '
                    <table class="table table-dark">
                      <thead>
                        <tr>

                          <th scope="col">Name</th>
                          <th scope="col">Sales</th>
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
    public function store(Request $request){
        dd($request->all());
    }
}
