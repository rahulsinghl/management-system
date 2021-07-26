<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Group;
use App\models\Customer;
use Session;
class CustomerController extends Controller
{
    //show customer list blade
    // get route 
    // used for view
    public function index()
    {   $data=Customer::all();
    	return view('customer.index',['customers'=>$data]);
    	# co
    }

    // show add custmer blade
    // get route 
   



    public function add()
    {   
        $groups=Group::all();

        return view('customer.add', compact('groups'));
    	
    }

    // show edit customer blade
    // view 
    // get request
    public function edit($id)
    {
    	$user=Customer::find($id);
        return view('customer.edit',compact('user'));

    }
   	
   	// add new customer/store customer data in database
   	// post route
    public function store(Request $request)
    {
    	$validate = $request->validate(['email'=>'required|email',
                             'state'=>'required',
                              'country'=>'required',
                               'company'=>'required|max:100|unique:customers']);

        $customer=new Customer;
        
        $customer->company=$request->company;
        $customer->email=$request->email;
        $customer->vat_number=$request->vat_no;
        $customer->website=$request->website;
        $customer->phone=$request->phone_no;
        $customer->pincode=$request->pincode;
        $customer->address=$request->address;
        $customer->city=$request->city;
        $customer->state=$request->state;
        $customer->country=$request->country;
        $customer->billing_pincode=$request->billing_pincode;
        $customer->billing_street=$request->billing_street;
        $customer->billing_city=$request->billing_city;
        $customer->billing_state=$request->billing_state;
        $customer->billing_country=$request->billing_country;
        $customer->shipping_pincode=$request->shipping_pincode;
        $customer->shipping_street=$request->shipping_street;
        $customer->shipping_city=$request->shipping_city;
        $customer->shipping_state=$request->shipping_state;
        $customer->shipping_country=$request->shipping_country;

        $customer->save();
        Session::flash('success','Customer successfully added!!');

        return redirect()->route('customer.index');
        
    }

    // update customer detail
    // post route
    public function update(Request $request, $id)
    {
    	
        $validate = $request->validate(['email'=>'required|email',
                             'state'=>'required',
                              'country'=>'required',
                               'company'=>'required|max:100|unique:customers,company,'.$id]);

        $customer=Customer::find($id);
        
        $customer->company=$request->company;
        $customer->email=$request->email;
        $customer->vat_number=$request->vat_no;
        $customer->website=$request->website;
        $customer->phone=$request->phone_no;
        $customer->pincode=$request->pincode;
        $customer->address=$request->address;
        $customer->city=$request->city;
        $customer->state=$request->state;
        $customer->country=$request->country;
        $customer->billing_pincode=$request->billing_pincode;
        $customer->billing_street=$request->billing_street;
        $customer->billing_city=$request->billing_city;
        $customer->billing_state=$request->billing_state;
        $customer->billing_country=$request->billing_country;
        $customer->shipping_pincode=$request->shipping_pincode;
        $customer->shipping_street=$request->shipping_street;
        $customer->shipping_city=$request->shipping_city;
        $customer->shipping_state=$request->shipping_state;
        $customer->shipping_country=$request->shipping_country;

        $customer->save();
         Session::flash('success','Customer successfully updated!!');
        return redirect()->route('customer.index');

    }

    // delete customer data from database
    // delete route
    public function delete($id)
    {
     Customer::find($id)->delete();
     //Registration::where('id',$id)->first();
     Session::flash('success','User successfully Deleted!!');

        return redirect()->route('customer.index');

    }


// ---------------------group modal---------------------------------

    public function addGroup(Request $request)
    {
        $model= new Group;
        $model->group_name=$request->group_name;
        $model->save();
        return response()->json(['status'=>200, 'data'=>Group::all()]);
    }





// ---------------------end group modal---------------------------------
    


}

