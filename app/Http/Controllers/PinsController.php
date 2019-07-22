<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pins;
use Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PinsImport;

class PinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $pin = Pins::where('PinCode', $id)->get();
        if(count($pin)>0){
        $pin =$pin[0];

        return response()->json($pin);
         // dd($pin);
       }
       else{
         return false;
       }
        // response()->json(['status'=>'failed'], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function importExcel(Request $request)
    {
        //
        $validator= Validator::make($request->all(),
        [
        'file'=>'required|max:5000|mimes:xlsx,xls,csv'
      ]);
       Excel::import(new PinsImport, $request->file('file'));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pins  $pins
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pins  $pins
     * @return \Illuminate\Http\Response
     */
    public function edit(Pins $pins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pins  $pins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pins $pins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pins  $pins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pins $pins)
    {
        //
    }
}
