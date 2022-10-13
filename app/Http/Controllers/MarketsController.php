<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarketsRequest;
use App\Models\Market;
use Illuminate\Http\Request;

class MarketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('markets.index',[
            'markets' => Market::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('markets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarketsRequest $request)
    {
        $tramp= $request->has('status');
        if(!$tramp){
            $request->request->add(['status' => 0]);
        }else{
            $request->merge([
                'status' => 1,
            ]);
        }
        Market::create($request->all());
        return redirect()->route('markets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Market  $markets
     * @return \Illuminate\Http\Response
     */
    public function show(Market $markets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function edit(Market $market)
    {
        return view('markets.edit',[
            'market'=>$market
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function update(MarketsRequest $request, Market $market)
    {
        $tramp= $request->has('status');
        if(!$tramp){
            $request->request->add(['status' => 0]);
        }else{
            $request->merge([
                'status' => 1,
            ]);
        }
        $market->name=$request->get('name');
        $market->value=$request->get('value');
        $market->address=$request->get('address');
        $market->employees_quantity=$request->get('employees_quantity');
        $market->occupancy_rate=$request->get('occupancy_rate');
        $market->status=$tramp;
        $market->save();
        return redirect('/markets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function destroy(Market $market)
    {
        $market->delete();
        return back();
    }
}
