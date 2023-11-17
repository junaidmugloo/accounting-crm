<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Bank::all();
        return view('banklist',['data'=>$data]);
    }
    public function add_transfer()
    {
        $data=Bank::all();
        return view('createtransfer',['data'=>$data]);
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
    public function store(Request $request)
    {
       $post = new Bank;

       $request->validate([
        'bank_name'=>['required','string'],
        'branch'=>['required','string'],
        'acc_name'=>['required','string'],
        'acc_holder'=>['required','string'],
        'acc_number'=>['required','integer'],
        'contact_number'=>['required','integer'],
        'initial_balance'=>['required','integer'],
        'status'=>['required'],
       ]);


       $post->bank_name = $request->bank_name;
       $post->branch = $request->branch;
       $post->acc_name = $request->acc_name;
       $post->acc_holder= $request->acc_holder;
       $post->acc_number= (int)$request->acc_number;
       $post->contact_number = (int)$request->contact_number;
       $post->initial_balance= (int)$request->initial_balance;
       $post->status = $request->status;
       try{$post->save();}
        catch(\Exception $e){
            if($e->getCode()== 11000)
            return response()->json(["result" => "Account number already exist"], 402);  
        }
        return response()->json(["result" => "Data inserted"], 200);
       
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
