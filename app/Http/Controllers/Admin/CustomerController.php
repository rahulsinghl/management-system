<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //show customer list blade
    // get route 
    // used for view
    public function index()
    {
    	return view('customer.index');
    	# co
    }

    // show add custmer blade
    // get route 
   

    public function add()
    { 
        return view('customer.add');
    	# code...
    }

    // show edit customer blade
    // view 
    // get request
    public function edit($id)
    {
    	# code...
    }
   	
   	// add new customer/store customer data in database
   	// post route
    public function store(Request $request)
    {
    	# code...
    }

    // update customer detail
    // post route
    public function update(Request $request, $id)
    {
    	# code...
    }

    // delete customer data from database
    // delete route
    public function delete($id)
    {
    	# code...
    }
}

