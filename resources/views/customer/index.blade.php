
@extends('layout')
@section('title', 'CRM')
@section('styles')

@stop
@section('content')



  <div class="mb-2 text-right" > <a class="btn btn-primary" href="{{ route('customer.add') }}">Add Customer</a></div>
   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>Phone_No.</th>

                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($customers as $item)
                                        <tr>
                                            <td>{{$item['email']}}
                                             <div><a href="{{ route('customer.delete', [$item->id])}}">DELETE</a>
                                                <a href="{{ route('customer.edit', [$item->id])}}">EDIT</a></div>
                                            </td>
                                            <td>{{$item['state']}}</td>
                                            <td>{{$item['country']}}</td>
                                            <td>{{$item['address']}}</td>
                                             <td>{{$item['phone_no']}}</td>
                                           
                                           
                                        </tr>
                                        @endforeach
                                     <!--  <a href="" class="btn btn-success">EDIT</a>
                                      <a href="" class="btn btn-danger">DELETE</a>   
                                        -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@stop
@section('scripts')
<script type="text/javascript">
 //  alert('test');
</script>

@endsection
