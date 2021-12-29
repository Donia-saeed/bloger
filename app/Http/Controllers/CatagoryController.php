<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Http\Requests\StoreCatagoryRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCatagoryRequest;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-catByDonia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatagoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Catagory::create($request->except('_token'));//  وفر عليا كتابة الكولمز وكمان هيمنع الهجمات
      return redirect('home');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {

        return view('home', ['catagory' => $catagory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        return view('edit-catagory', ['catagory' => $catagory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatagoryRequest  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     *      *  @param  int  $id

     */
    // public function update(UpdateCatagoryRequest $request, Catagory $catagory)
    // {



    // }
    public function update(Request $request, $id)
    {
        $catagory= Catagory::findOrFail($id);// to find the record of id =$id  if not found return throw error
        $catagory->fill($request->all())->save();
    return redirect('home');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $catagory)
    {
        //
    }
}
