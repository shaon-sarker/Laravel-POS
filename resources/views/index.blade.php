@extends('admin_dashboard')
@section('admin')
<div class="content">
   <!-- Start Content-->
   <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box">
               <div class="page-title-right">
               </div>
               <h4 class="page-title">Dashboard</h4>
            </div>
         </div>
      </div>
      <!-- end page title --> 
      <div class="row">
         <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                           <i class="fe-heart font-22 avatar-title text-white"></i>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="text-end">
                           <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{ round($total_paid) }}</span></h3>
                           <p class="text-muted mb-1 text-truncate">Total Paid </p>
                        </div>
                     </div>
                  </div>
                  <!-- end row-->
               </div>
            </div>
            <!-- end widget-rounded-circle-->
         </div>
         <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                           <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="text-end">
                           <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{ $total_due  }}</span></h3>
                           <p class="text-muted mb-1 text-truncate">Total Due </p>
                        </div>
                     </div>
                  </div>
                  <!-- end row-->
               </div>
            </div>
            <!-- end widget-rounded-circle-->
         </div>
         <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                           <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="text-end">
                           <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ count($completeorder)  }}</span></h3>
                           <p class="text-muted mb-1 text-truncate">Complete Order</p>
                        </div>
                     </div>
                  </div>
                  <!-- end row-->
               </div>
            </div>
            <!-- end widget-rounded-circle-->
         </div>
         <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                           <i class="fe-eye font-22 avatar-title text-white"></i>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="text-end">
                           <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ count($pendingorder)  }}</span></h3>
                           <p class="text-muted mb-1 text-truncate">Pending Order</p>
                        </div>
                     </div>
                  </div>
                  <!-- end row-->
               </div>
            </div>
            <!-- end widget-rounded-circle-->
         </div>
         <!-- end col-->
      </div>
      <!-- end row-->
   </div>
   <!-- container -->
</div>
<!-- content -->
@endsection
