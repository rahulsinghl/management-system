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
                        <input type="text" class="form-control company" name="company" >
                     </div>
                  </div>
                    <div >
                     <div class="form-group"> 
                        <label>VAT No.</label>
                        <input type="text" class="form-control vat_no" name="vat_no" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>PhoneNO.</label>
                        <input type="text" class="form-control Phone_no" name="Phone_no" >
                     </div>
                  </div>

                        <div class="form-group">
                                  <label >Currency</label>
                                  <select class="form-control Currency" name="Currency">
                                    <option>USD</option>
                                    <option>IND</option>
                                  
                                    
                                  </select>
                                </div>

                                 <div class="form-group">
                                  <label >Default Language</label>
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
                        <textarea type="text" class="form-control address" name="address" ></textarea>
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>City</label>
                        <input type="text" class="form-control city" name="city" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>State</label>
                        <input type="text" class="form-control State" name="state" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>Pin code</label>
                        <input type="text" class="form-control Pin_code" name="Pin_code" >
                     </div>
                  </div>

                   <div class="form-group">
                    <label >Country</label>
                    <select class="form-control Country" name="Country">
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
                        <input type="text" class="form-control State" name="State" >
                     </div>
                  </div>

                   <div >
                     <div class="form-group"> 
                        <label>Pin code</label>
                        <input type="text" class="form-control Pin_code" name="Pin_code" >
                     </div>
                  </div>


                       <div class="form-group">
                    <label >Country</label>
                    <select class="form-control Country" name="Country">
                      <option>Uk</option>
                      <option>India</option>
                      <option>London</option>
                      
                    </select>
                  </div>
                       

               </div>
                  


               <div class="col-md-6"> 

                <div class="row"> 
                  <div class="question-info col-1"><i  class="fas fa-question question-black" ></i><div class="question_help">test question help on hover ?</div></div>

                  <div class="col-md-5 col-sm-11"><h5> Shipping Address</h5></div> <div class="col-md-6 text-right"> <a id="same"> same as Billing Address</a>
                </div>
              </div>
              <hr>
              
              
                <div >
                     <div class="form-group"> 
                        <label>Street</label>
                         <textarea type="text" class="form-control Street" name="street" ></textarea>
                      
                     </div>
                  </div>
                    <div >
                     <div class="form-group"> 
                        <label>City</label>
                        <input type="text" class="form-control City" name="City" >
                     </div>
                  </div>
                 
                  <div >
                     <div class="form-group"> 
                        <label>State</label>
                        <input type="text" class="form-control State" name="state" >
                     </div>
                  </div>
                  <div >
                     <div class="form-group"> 
                        <label>Pin code</label>
                        <input type="text" class="form-control Pin_code" name="Pin_code" >
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

   @stop
@section('scripts')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
 <script type="text/javascript"> 
 $(document).on('click','#same_customerdetails',function(events){

     var address= $('.address').val()
     
     $('.billing_street').val($('.address').val());

     $('.shipping_country').val('india');

     $('.shipping_country').change();

 })
</script> 
<!-- fetch input box data -->
<!-- $('.address').val() -->

<!-- set  input box value use juery -->
   <!-- $('.address').val(Pass value/varible) -->


@endsection
