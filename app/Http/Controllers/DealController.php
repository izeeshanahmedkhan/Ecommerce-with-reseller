<?php

namespace App\Http\Controllers;

use App\Models\ColourImageProductSize;
use App\Models\Customer;
use App\Models\Deal;
use App\Models\Product;
use App\Models\Reseller;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = Deal::all();

        return view('admin.deals.index',['deals'=>$deals]);
    }

    public function getSize(Request $request){

        $checksize = null;

        $product_sizes = ColourImageProductSize::where('product_id',$request->product_id)->get();

        foreach ($product_sizes as $product_size){

            if($checksize !== $product_size->size_id){

                $arr[] = Size::where('id',$product_size->size_id)->first();

                $checksize = $product_size->size_id;

            }
        }

        $data['sizes'] = $arr;

        return response()->json($data);
    }

    public function getSpecificdealfor(Request $request){

        if($request->deal_for == "customer"){

            $data['customers'] = Customer::all();

            return response()->json($data);

        }
        elseif($request->deal_for == "reseller"){

            $data['resellers'] = Reseller::all();

            return response()->json($data);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::where('status',1)
            ->where('stock_availability',1)
            ->get();

        return view('admin.deals.create',['products'=>$products]);
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

            'deal' => ['required'],
            'product_id' => ['required'],
            'size_id' => ['required'],
            'discount' => ['required','numeric','min:1','max:100'],
            'start_date' => ['required','date'],
            'end_date' => ['required','date','after:start_date'],
            'deal_for' => ['required'],
            'status' => ['required']
        ]);

        $deal = new Deal();

        $deal->fill($request->all());

        $deal->save();

        Session::flash('message','Deal Created Successfully');
        Session::flash('alert-type','success');

        return redirect()->route('deal.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        $products = Product::where('status',1)
            ->where('stock_availability',1)
            ->get();

        return view('admin.deals.edit',['deal'=>$deal,'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
        $request->validate([

            'deal' => ['required'],
            'product_id' => ['required'],
            'size_id' => ['required'],
            'discount' => ['required','numeric','min:1','max:100'],
            'start_date' => ['required','date'],
            'end_date' => ['required','date','after:start_date'],
            'deal_for' => ['required'],
            'status' => ['required']
        ]);

        $deal->fill($request->all());

        $deal->save();

        Session::flash('message','Deal Updated Successfully');
        Session::flash('alert-type','success');

        return redirect()->route('deal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        $deal->delete();

        Session::flash('message','Deal Deleted Successfully');
        Session::flash('alert-type','success');

        return redirect()->route('deal.index');
    }

    public function deal_status(Request $request,Deal $deal){

        if(!empty($request->deal)){

            if($deal->status == 0){

                $deal->status = 1;

                $deal->save();

                Session::flash('message','Deal Activated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('deal.index');

            }
            elseif($deal->status == 1){

                $deal->status = 0;

                $deal->save();

                Session::flash('message','Deal InActivated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('deal.index');
            }

        }

    }
}
