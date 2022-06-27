@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Under Review Orders List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>
               Home</li>
            <li class="breadcrumb-item active">Under Review Orders </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          <div class="card">
            <div class="card-header bg-white">
              <button id="export" class="btn btn-info">Export Reports As Excel</button>
            </div>
            <!-- /.card-header -->

            <div class="card-body scrollable">
            <table class="table table-bordered table-hover data_table ">
            <thead>
            <tr>
            <th style="width:15%">Order Date</th>
            <th style="width:15%">Order ID</th>
                 <th style="width:20%">Seller Shop Name</th> 
                 <th style="width:10%">Customer</th>
                 <th style="width:10%">Address</th>
                 <th style="width:5%">Status</th>
                 <th style="width:10%">Products</th>
                 <th style="width:20%">Remarks</th>
                  <th style="width:10%">Circle Price</th>
                 <th style="width:8%">Collected Price</th>
                 <th style="width:8%">Delivery Man</th>
                 <th style="width:10%">Delivery Date</th> 
                 <th style="width:10%">Tools</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($orders as $order)
                   <tr> 
                    <td>{{$order->date}}</td> 
                    <td>{{$order->code}}</td>
                    <td>{{$order->shop_name}}</td> 
                    <td>{{$order->customer_name}}</td> 
                    <td>{{$order->address}}</td> 
                    <td>{{$order->delivery_status}}</td>
                    <td>{{$order->product_name}}</td>
                    <td>{{$order->remarks}}</td>
                    <td>{{$order->circle_price }}</td> 
                    <td>{{$order->collected_price}}</td> 
                    <td>{{$order->delivery_man}}</td>
                    <td>{{$order->delivery_date}}</td> 
                    <td>{{-- Toools td starts--}} 
{{-- Update button.......................................................--}}  
<button type="button" class="btn btn-success under-review-order-btn border-radius-none"  value="{{$order->id}}" data-toggle="modal" 
data-target="#under-review-order-modal-id"><i class="fa fa-edit"></i></button><br> 
{{-- View button.......................................................--}} 
<a href="{{url('view-under-review-order-details/'.$order->id)}}">
<button class="btn btn-warning border-radius-none" ><i class="fa fa-eye"></i></button>
</a>
<br>
{{-- delete//trash button.......................................................--}} 
<a href="#">
 <button class="btn btn-danger border-radius-none" value="{{$order->id}}"><i class="fa fa-trash"></i>
</button>
</a>
<br>
{{--File button.......................................................--}}
                     <div class="dropdown-menu"> 
                       <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" ><i class="fa fa-file"></i>
                       <span class="caret"></span></button>
                       </div>
                        <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle border-radius-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-file"></i>
                        </button>
                        <div class="dropdown-menu">
                          <li><a href="" target="”_blank”" class="text-dark ml-2">Seller Invoice</a></li>
                          <li><a href="" target="”_blank”" class="text-dark ml-2">Customer Invoice</a></li>
                          <li><a href="#" target="”_blank”" class="text-dark ml-2">Update Address</a></li>
                          <li><a href="#" target="”_blank”" class="text-dark ml-2">Update Order</a></li>
                          <li><a href="#" target="”_blank”" class="text-dark ml-2">Add Details</a></li>
                          <li><a href="#" target="”_blank”" class="text-dark ml-2">Add Details 2</a></li>
                          <li><a href="#" target="”_blank”" class="text-dark ml-2">Add Details 3</a></li>
                       </div>
                      </div>{{-- End of file div--}}  
                      </td>{{-- Toools td End--}} 
                  </tr> 
@endforeach {{-- End of foreach--}}  
                  
<!-- Modal -->
@include('layouts.inc.UnderReviewOrders.under-review-orders-update-modal')

                </tbody> 
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        {{-- </div> --}}
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->  
@endsection
