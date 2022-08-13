<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllers extends Controller
{
    	public function index(){
            return Product::all();
        }




        public function store(Request $request){
            $request->validate([
                'name' => 'required',
                'slug' =>'required',
                'price' => 'required'
            ]);
            return Product::create($request->all());
         
        }


        public function show($id){
            return Product::find($id);
        }

        public function update (Request $request, $id){
            $product = Product::find($id);
            $propuct->update($request->all());
            return $product;
        }

        public function destroy($id){
             return Product::destroy($id);
        }
        
        public function search($name){
            return Product::where('name','likes','%'.$name.'%')->get();
        }



         
}

