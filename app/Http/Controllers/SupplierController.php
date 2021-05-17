<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers =  Supplier::all();

        return view('admin.suppliers.index',['suppliers'=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
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
            'name'=> ['required', 'max:255'],
            'business_name'=> ['required', 'string','max:255'],
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','numeric', 'digits:11'],
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_no'=> 'nullable|string|max:255',
            'messaging_service_name'=> 'nullable|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'social_media_name_1'=> 'nullable|string|max:255',
            'link_1'=> 'nullable|string|max:255',
            'social_media_name_2'=> 'nullable|string|max:255',
            'link_2'=> 'nullable|string|max:255',
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $checkCnicNo = Supplier::where('cnic_no',$request->cnic_no)->get();

        if(sizeof($checkCnicNo) == false){

            $supplier = new Supplier();

            $supplier->fill($request->all());

            $cnic_front_image = $request->file('cnic_front');
            $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
            $cnic_front_image->storeAs('/images/supplierImages',$cnic_front_image_name);

            $supplier->cnic_front = $cnic_front_image_name;

            $cnic_back_image = $request->file('cnic_back');
            $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
            $cnic_back_image->storeAs('/images/supplierImages',$cnic_back_image_name);

            $supplier->cnic_back = $cnic_back_image_name;

            $supplier->save();

            Session::flash('message','Supplier Added Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('supplier.index');

        }
        else{

            Session::flash('message','Supplier Already exists with this CNIC');
            Session::flash('alert-type','warning');
            return redirect()->back();

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('admin.suppliers.edit',['supplier'=>$supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'name'=> ['required', 'max:255'],
            'business_name'=> ['required', 'string','max:255'],
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','numeric', 'digits:11'],
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_no'=> 'nullable|string|max:255',
            'messaging_service_name'=> 'nullable|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'social_media_name_1'=> 'nullable|string|max:255',
            'link_1'=> 'nullable|string|max:255',
            'social_media_name_2'=> 'nullable|string|max:255',
            'link_2'=> 'nullable|string|max:255',
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $checkCnicNo = Supplier::where('cnic_no',$request->cnic_no)->get();

        if(sizeof($checkCnicNo) == false || $supplier->cnic_no  == $request->cnic_no){

            $supplier->fill($request->all());

            if($request->cnic_front != null){

                $cnic_front_image = $request->file('cnic_front');
                $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
                $cnic_front_image->storeAs('/images/supplierImages',$cnic_front_image_name);

                $supplier->cnic_front = $cnic_front_image_name;

                $supplier->save();
            }
            else{

                $supplier->save();
            }

            if($request->cnic_back != null){

                $cnic_back_image = $request->file('cnic_back');
                $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
                $cnic_back_image->storeAs('/images/supplierImages',$cnic_back_image_name);

                $supplier->cnic_back = $cnic_back_image_name;

                $supplier->save();
            }
            else{

                $supplier->save();
            }

            Session::flash('message','Supplier Updated Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('supplier.index');

        }
        else{

            Session::flash('message','Supplier Already exists with this CNIC');
            Session::flash('alert-type','warning');
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        Session::flash('message','Supplier Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('supplier.index');
    }
}
