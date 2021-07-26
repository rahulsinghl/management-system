
@extends('layout')
@section('title', 'CRM')
@section('styles')

<style type="text/css">


.nav-pills li{
       margin: 15px 10px;
    font-size: 20px;
}
.nav-pills  .active{
   border-bottom: 2px solid #353bd0;
}

.question-black{
  background-color: black;
    color: white;
    font-size: 12px;
    padding: 5px 8px; 
    border-radius: 50%;
    margin-right: 6px;
    margin-top: 0px;

}
.question_help{
     display: none;
    background: black;
    color: white;
    padding: 10px;
    position: absolute;
    width: 200px;
}
.question-info:hover .question_help{
  display: block;
}

</style>
@stop
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('customer.store')}}" method="post">
  @csrf
<div class="card">
   <div class="card-header text-center">Customer Details
   </div>
   <div class="card-body">
   
<div id="exTab1" > 
<ul  class="nav nav-pills">
         <li class="active">
        <a  href="#customer_detail_tab" data-toggle="tab">Customer Details</a>
         </li>
         <li><a href="#billing_shipping_tab" data-toggle="tab">Billing and Shipping</a>
         </li>
         
      </ul>

         <div class="tab-content clearfix">
           <div class="tab-pane active" id="customer_detail_tab">
            <div class="row">
               <div class="col-md-6 ">
                  <div >
                     <div class="form-group"> 
                        <label>Company</label>
                        <input value="{{old('company')}}" type="text" class="form-control company" name="company" >
                     </div>
                  </div>
                    <div >
                     <div class="form-group"> 
                        <label>VAT No.</label>
                        <input value="{{old('vat_no')}}" type="text" class="form-control vat_no" name="vat_no" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>PhoneNO.</label>
                        <input value="{{old('Phone_no')}}" type="text" class="form-control Phone_no" name="Phone_no" >
                     </div>
                  </div>

                        <div class="form-group">
                                  <label >Email</label>
                                  <input value="{{old('email')}}" type="email" class="form-control email" name="email">
                                  
                                  
                                    
  
                                </div>

                                 <div class="form-group">
                                  <label >Group <a  data-toggle="modal" data-target="#group-modal"><i class="fa fa-plus"></i> </a></label>
                                  <select class="form-control Default_language" name="language ">
                                    <option>Hindi</option>
                                    <option>Enlish</option>

                                  
                                    
                                  </select>
                                </div>






               </div>

               <div class="col-md-6"> 
                  <div >
                     <div class="form-group"> 
                        <label>Address</label>
                        <textarea value="{{old('address')}}" type="text" class="form-control address" name="address" ></textarea>
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>City</label>
                        <input value="{{old('city')}}" type="text" class="form-control city" name="city" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>State</label>
                        <input value="{{old('state')}}" type="text" class="form-control state" name="state" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>Pin code</label>
                        <input type="text" class="form-control pin_code" name="pin_code" >
                     </div>
                  </div>

                   <div class="form-group">
                    <label >Country</label>
                    <select value="{{old('contry')}}" class="form-control country" name="country">
                      <option>Uk</option>
                      <option>India</option>
                      <option>London</option>
                      
                    </select>
                  </div>



               </div>
               

            </div>
          
            </div>
            <div class="tab-pane" id="billing_shipping_tab">
               <div class="row">
               <div class="col-md-6 ">
                 <div class="row"> <div class="col-md-6"><h5>Billing Address</h5></div> <div class="col-md-6 text-right"> <a id="same_customerdetails"> same as Customer Details</a>
                </div>
              </div>
              <hr>
                  <div >
                     <div class="form-group"> 
                        <label>Street</label>
                         <textarea type="text" class="form-control billing_street" name="billing_street" ></textarea>
                      
                     </div>
                  </div>
                    <div >
                     <div class="form-group"> 
                        <label>City</label>
                        <input type="text" class="form-control billing_city" name="billing_city" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>State</label>
                        <input type="text" class="form-control billing_state" name="billing_state" >
                     </div>
                  </div>

                   <div >
                     <div class="form-group"> 
                        <label>Pin code</label>
                        <input type="text" class="form-control billing_pincode" name="billing_pincode" >
                     </div>
                  </div>


                       <div class="form-group">
                    <label >Country</label>
                    <select class="form-control billing_country" name="billing_country">
                      <option>Uk</option>
                      <option>India</option>
                      <option>London</option>
                      
                    </select>
                  </div>
                       

               </div>
                  


               <div class="col-md-6"> 

                <div class="row"> 
                  <div class="question-info col-1"><i  class="fas fa-question question-black" ></i><div class="question_help">test question help on hover ?</div></div>

                  <div class="col-md-5 col-sm-11"><h5> Shipping Address</h5></div> <div class="col-md-6 text-right"> <a id="same_billingaddress"> same as Billing Address</a>
                </div>
              </div>
              <hr>
              
              
                <div >
                     <div class="form-group"> 
                        <label>Street</label>
                         <textarea type="text" class="form-control shipping_street" name="street" ></textarea>
                      
                     </div>
                  </div>
                    <div >
                     <div class="form-group"> 
                        <label>City</label>
                        <input type="text" class="form-control shipping_city" name="shipping_city" >
                     </div>
                  </div>
                 
                  <div >
                     <div class="form-group"> 
                        <label>State</label>
                        <input type="text" class="form-control shipping_state" name="shipping_state" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>Pin code</label>
                        <input type="text" class="form-control shipping_pincode" name="shipping_pincode" >
                     </div>
                  </div>

                   <div class="form-group">
                    <label >Country</label>
                    <select class="form-control shipping_country" name="shipping_country">
                      <option value="uk">Uk</option>
                      <option value="india">India</option>
                      <option value="london">London</option>
                      
                    </select>
                  </div>



               </div>
               

            </div>
         
            </div>
        
         </div>
  </div>



       
   </div>
</div>
<div class="text-right mt-3"><button type="submit" class="btn btn-primary ">Submit</button></div>
</form>

<div class="modal fade" id="group-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
         <div class="modal-body">
        <input type="" name="group_name" class="form-control group_name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
     
    </div>
  </div>
</div>

   @stop
@section('scripts')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
 <script type="text/javascript"> 
 $(document).on('click','#same_customerdetails',function(events){

     var address= $('.address').val()
     
     $('.billing_street').val($('.address').val());

     $('.billing_country').val($('.country').val());

     $('.billing_country').change();

     var state=$('.state').val()
     $('.billing_state').val($('.state').val());

      var city =$('.city').val()
     $('.billing_city').val($('.city').val());


     var pin_code =$('.pin_code').val()
     $('.billing_pincode').val($('.pin_code').val());
     

 })

 $(document).on('click','#same_billingaddress',function(events){

   $('.shipping_city').val($('.billing_city').val());

   $('.shipping_state').val($('.billing_state').val());

   $('.shipping_street').val($('.billing_street').val());

   $('.shipping_pincode').val($('.billing_pincode').val());

   $('.shipping_country').val($('.billing_country').val());

 })
</script> 
<!-- fetch input box data -->
<!-- $('.address').val() -->

<!-- set  input box value use juery -->
   <!-- $('.address').val(Pass value/varible) -->


@endsection
