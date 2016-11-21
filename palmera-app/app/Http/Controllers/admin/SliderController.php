<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Slider;
use Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = \App\Slider::paginate(10);
        return view('admin.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(Request $request)
    {
        $success=$request->session()->get('success');
        return view('admin.slider.create',compact('success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validations
        $this->validate($request, [
            'photo' => 'required',       
        ]);

        $userid = Auth::user()->id;
        //dd($request->all());    
        $slider = new \App\Slider;
        $slider->firstline = $request->firstline; 
        $slider->secondline = $request->secondline;
        $slider->thirdline = $request->thirdline;
        $slider->userid = $userid;
        $slider->photo = $request->file('photo')->store('uploads/'.date('Y-m-d')); 
        $slider->status = $request->status;
        $slider->row_order = $request->row_order;
        $slider->row_order = 0;
        
        if($slider->save()){
            return redirect('admin/slider/create')->with(['success'=>'true']);
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
        $slider  = \App\Slider::where('id',$id)->first();
        return view('admin.slider.edit',compact('slider'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $success=$request->session()->get('success');
        return view('admin.slider.edit',compact('success'));
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
        $slider  = \App\Slider::where('id',$id)->first();
        $slider->firstline    = $request->firstline; 
        $slider->secondline    = $request->secondline; 
        $slider->thirdline    = $request->thirdline; 
        $slider->status    = $request->status; 
        $slider->row_order = $request->row_order;
        if($request->hasFile('photo')) {
            $slider->photo = $request->file('photo')->store('uploads'.date('Y-m-d')); 
        }
        $slider->save();
        return redirect('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider  = \App\Slider::where('id',$id)->first();
        $slider->delete();
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
        $slider  = \App\Slider::where('id',$id)->first();
        $slider->status = $request->status;

        $slider ->save();
        return redirect('admin/slider');
    }

}
