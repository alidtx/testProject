<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Material;
use App\Models\Unit;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    
      public function index() {
        
        $result['supplier']=Supplier::get();
        $result['Material']=Material::get();
        $result['unit']=Unit::with('suplpier','material')->get();
        // dd($result['unit']);
       
        return view('index', $result);
      }


      public function supplier_post( Request $request) 

      {

        $request->validate([
            'supplier_name'=>'required'
        ]);

        $model=new Supplier();
        $model->name=$request->post('supplier_name');
        $model->save();
        return redirect('index');                       
      }

      public function item_post( Request $request) {
       
        $request->validate([
            'item_name'=>'required'
        ]);

        $model=new Material();
        $model->name=$request->post('item_name');
        $model->save();
        return redirect('index');   

      }

      public function purchase_order( Request $request) {
       
        $request->validate([
            'supplier_name'=>'required:unique'
        ]);
   
        $model=new Unit();
        $model->color=$request->post('color');
        $model->supplier_id=$request->post('meterial_name');
        $model->item_id=$request->post('supplier_name');
        $model->unit=$request->post('unit');
        $model->qty=$request->post('qty');
        $model->unit_price=$request->post('unit_price');
        $model->save();
        return redirect('index');   

      }




}
