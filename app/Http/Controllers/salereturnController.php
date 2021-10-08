<?php

namespace App\Http\Controllers;
use App\Models\salereturn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class salereturnController extends Controller
{
       public function index()
    {
        $salereturns = salereturn::all();

        return view('admin.salereturn.index',['salereturn'=>$salereturns]);
    }


    public function create()
    {
        return view('admin.salereturn.create');
    }


 public function store(Request $req)
    {
       // $req->validate([
       //      'order_number'=> ['required', 'max:255'],
       //      'product_id' => ['required', 'string', 'min:5'],
       //      'reason'=> ['required', 'max:255'],
       //      'amount' => ['required', 'max:255'],
            
       //  ]);

   
        $salereturn = new salereturn;

        $salereturn->order_number = $req->ordername;
        $salereturn->product_id = $req->productid;
        $salereturn->reason = $req->reason;
        $salereturn->amount = $req->amount;
        $salereturn->save();

        

        

        Session::flash('message','Sale return Added Successfully');
        Session::flash('alert-type','success');

        return redirect()->route('salereturn.index');
    }



  public function edit(salereturn $salereturn)
    {

        return view('admin.salereturn.edit',['salereturn'=>$salereturn]);
    }





 public function update(Request $req, salereturn $salereturn)
    {
        $salereturn = salereturn::where('id',$salereturn->id)->first();
        

        // $request->validate([
        //     'name'=> ['required', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255','unique:users,email,'.$user->id],
        //     'contact'=> ['required','numeric', 'digits:11'],
        //     'address'=> ['required', 'string','max:255'],
        //     'password' => ['nullable', 'string', 'min:5'],
        //     'status'=> 'required',
        // ]);

         $salereturn->order_number = $req->ordername;
        $salereturn->product_id = $req->productid;
        $salereturn->reason = $req->reason;
        $salereturn->amount = $req->amount;
        $salereturn->save();

     

     
       

        Session::flash('message','salereturn Updated Successfully');
        Session::flash('alert-type','success');

        return redirect()->route('salereturn.index');
    }


 public function destroy(salereturn $salereturn)
    {

        $salereturn_user = Salereturn::where('id',$salereturn->id)->delete();
     

        // $user->delete();
        // $salecenter->delete();

        Session::flash('message','Sale return Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('salereturn.index');
    }





}
