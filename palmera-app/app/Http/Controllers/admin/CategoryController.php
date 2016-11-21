<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Category;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = \App\Category::paginate(10);
        return view('admin.category.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(Request $request)
    {
        $success = $request->session()->get('success');
        return view('admin.category.create',compact('success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getAll  = \App\Category::all();


        $this->validate($request, [
            'name' => 'required',       
        ]);


        $userid = Auth::user()->id;
        //dd($request->all());    
        $cat = new \App\Category;
        $cat->name = $request->name;
        if($request->hasFile('photo')) { 
            $cat->photo = $request->file('photo')->store('uploads/'.date('Y-m-d'));
        }  else {
            $cat->photo = "";
        }
        $cat->status = $request->status;
        $cat->row_order = $request->row_order;

        if($cat->save()){
            return redirect('admin/category/create')->with(['success'=>'true']);
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
        $cat  = \App\Category::where('id',$id)->first();
        return view('admin.category.edit',compact('cat'));

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
        return view('admin.category.edit',compact('success'));
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
        $cat  = \App\Category::where('id',$id)->first();
        $cat->name = $request->name;
        $cat->status = $request->status; 
        $cat->row_order = $request->row_order;
        if($request->hasFile('photo')) {
            $cat->photo = $request->file('photo')->store('uploads'.date('Y-m-d')); 
        }
        $cat->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat  = \App\Category::where('id',$id)->first();
        $cat->delete();
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
        $cat  = \App\Category::where('id',$id)->first();
        $cat->status = $request->status;

        $cat->save();
        return redirect('admin/category');
    }

}
