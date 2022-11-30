<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=car::all();
        return response()->view('cms.Table.index',['Table'=>$data]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.form.created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|min:3|max:45'
        ]);
        //
        $Car=new Car();
        $Car->name= $request->name;
        $saved = $Car->save();
          
        session()->flash('alert-type',$saved ? 'succses' : 'danger');
        session()->flash('message',$saved ? "create successfully" : "create failed!");
        return redirect()->back();
    //    dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->view('cms.Edit.edit', ['car'=>Car::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return response()->view('cms.Edit.edit', ['car'=>Car::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $request->validate([
            'name'=>'required|string|min:3|max:45'
        ]);
        
        $car = Car::find($id);
        $car->name= $request->name;
        $update = $car->save();
          
        session()->flash('alert-type',$update ? 'succses' : 'danger');
        session()->flash('message',$update ? " update successfully" : "update failed!");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Car::where('id', $id)->delete();

         return redirect()->back();

    }
}
