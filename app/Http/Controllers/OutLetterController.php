<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\OutLetter;
use Carbon\Carbon;


class OutLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = OutLetter::orderBy('letter_number', 'desc')->paginate(7);
        $count = OutLetter::count();
        return view('outletter.index', ['data'=>$data, 'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('OutLetter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $input['key_number'] = $this->getKeyNumber();
        $input['letter_number'] = $this->getGenerateNumber($input['key_number']);
        OutLetter::create($input);
        return redirect('outletter');
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

    public function getKeyNumber(){
      $last = OutLetter::orderBy('created_at', 'desc')->first();

      $value = 0;
      $value =  ($last == null)? 1 : $last->key_number + 1;
      // if($last == null){
      //   $value = 1;
      // }else{
      //   $value = $last->key_number + 1;
      // }

      return $value;
    }

    public function getGenerateNumber($key_number){
      $generateNum = "";
      $date = Carbon::now();
      $generateNum = "B.N/{$key_number}/SUMBAR/PROV/{$date->month}.{$date->year}";
      return $generateNum;
    }


}
