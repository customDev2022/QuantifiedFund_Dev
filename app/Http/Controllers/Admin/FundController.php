<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fund;
use DB;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['funds'] = Fund::orderBy('id', 'desc')->get();
        return view('admin.funds.manage-funds', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.funds.add-fund');
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
            'fund_title'=>'required',
            'description'=>'required',
            'portfolio_id'=>'required',
            'fund_objective'=>'required',
            'fund_focus'=>'required',
            'fund_description'=>'required',
            'fact_sheet_link'=>'required',
            'qtr'=>'required',
            'ytd'=>'required',
            'one_year'=>'required',
            'three_year'=>'required',
            'five_year'=>'required',
            'since_inception'=>'required',
            'index_name'=>'required',
            'set_date'=>'required',
            'expense_ratio'=>'required',
            'disclaimers'=>'required',
        ]);

        try {
            DB::beginTransaction();
            $fund = new Fund;
            $fund->title = $request->fund_title;
            $fund->description = $request->description;
            $fund->slug = \Str::slug($request->fund_title);
            $fund->portfolio_id = $request->portfolio_id;
            $fund->fund_objective = $request->fund_objective;
            $fund->fund_focus = $request->fund_focus;
            $fund->fund_description = $request->fund_description;
            $fund->fact_sheet_link = $request->fact_sheet_link;
            $fund->qtr = $request->qtr;
            $fund->ytd = $request->ytd;
            $fund->one_year = $request->one_year;
            $fund->three_year = $request->three_year;
            $fund->five_year = $request->five_year;
            $fund->since_inception = $request->since_inception;
            $fund->index_name = $request->index_name;
            $fund->set_date = $request->set_date;
            $fund->since_inception = $request->since_inception;
            $fund->expense_ratio = $request->expense_ratio;
            $fund->disclaimers = $request->disclaimers;

            if($request->hasFile('featured_image')){
                $fund->featured_image = $request->file('featured_image')->store('admin/fundImage', 'public');
            }
            
            $fund->save();
            DB::commit();
            return back()->with(['success'=>'New Fund Created!!']);
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with(['error'=>'Something went wrong!!']);
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
        $funds= Fund::find($id);
        // dd($funds->featured_image);
        if(!is_null($funds->featured_image)){
            dd("unlink");
            unlink(public_path('storage/'.$funds->featured_image));
        }
        $funds->delete();
        return back()->with(['success'=>'Fund Deleted']);
    }
}
