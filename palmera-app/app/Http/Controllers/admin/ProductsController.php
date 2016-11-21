<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Products;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\Products::paginate(10);
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(Request $request)
    {
        $success = $request->session()->get('success');
        return view('admin.products.create',compact('success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',       
        ]);


        $userid = Auth::user()->id;
        //dd($request->all());    
        $products = new \App\Products;
        $products->name = $request->name;
        $products->price_cad = $request->price_cad;
        $products->price_uk = $request->price_uk;
        $products->price_pak = $request->price_pak;
        $products->rating = $request->rating;
        $products->text_short = $request->text_short;
        $products->text_long = $request->text_long;
        $products->photo = $request->photo;
        $products->status = $request->status;
        $products->row_order = $request->row_order;

        if($products->save()){
            return redirect('admin/products/create')->with(['success'=>'true']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$userid = Auth::user()->id;
        $products  = \App\Products::where('id',$id)->first();
        return view('admin.products.edit',compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $success = $request->session()->get('success');
        return view('admin.products.edit',compact('success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products  = \App\Category::where('id',$id)->first();
        $products->name = $request->name;
        $products->status = $request->status; 
        $products->row_order = $request->row_order;
        if($request->hasFile('photo')) {
            $products->photo = $request->file('photo')->store('uploads'.date('Y-m-d')); 
        }
        $products->save();
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products  = \App\Products::where('id',$id)->first();
        $products->delete();
        return redirect()->back();
    }

    public function status(Request $request, $id){
        if($request->status!=""){
            if($request->status=="1"){
                $request->status = "0";
            } else {
                $request->status = "1";
            }
        }
        $products  = \App\Category::where('id',$id)->first();
        $products->status = $request->status;

        $products->save();
        return redirect('admin/products');
    }

}
