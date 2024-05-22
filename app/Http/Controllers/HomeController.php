<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produce;

class HomeController extends Controller
{
    function index(){
        return view ('test');
    }

    function store(Request $request){

        $data=new Produce;
        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $data->image=$imagename;

        $data->save();

        return redirect()->back()->with('success', 'Your data has been successfully registered.');
    }

    function show(){
        //dd('hello');
        $pro = Produce::all();

        return view('add_product',compact('pro'));
    }

    function delete($id){
       
        $data = Produce::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $data->delete();
    
        return redirect()->back()->with('success', 'Product deleted successfully.');
    
    }
}

?>