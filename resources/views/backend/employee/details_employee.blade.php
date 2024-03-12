@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="content">
   <!-- Start Content-->
   <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box">
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Details Employee</a></li>
                     <br>
                  </ol>
               </div>
               <h4 class="page-title">Details Employee</h4>
            </div>
         </div>
      </div>
      <!-- end page title -->
      <div class="row">
         <div class="col-lg-8 col-xl-12">
            <div class="card">
               <div class="card-body">
                  <!-- end timeline content-->
                  <a href="{{ route('all.employee') }}" class="btn btn-blue rounded-pill waves-effect waves-light" title="Back">Back</a>
                  <div class="tab-pane" id="settings">
                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Details Employee</h5>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Employee Name</label>
                                 <p class="text-white">{{ $employee->name }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Employee Email</label>
                                 <p class="text-white">{{ $employee->email }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Employee Phone</label>
                                 <p class="text-white">{{ $employee->phone }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Employee Address</label>
                                 <p class="text-white">{{ $employee->address }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Employee Salary</label>
                                 <p class="text-white">{{ $employee->salary }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Employee Vacation</label>
                                 <p class="text-white">{{ $employee->vacation }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">City</label>
                                 <p class="text-white">{{ $employee->city }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label for="firstname" class="form-label">Experience</label>
                                 <p class="text-white">{{ $employee->experience }}</p>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mb-3">
                                 <label for="example-fileinput" class="form-label"> </label>
                                 <img id="showImage" src="{{  asset($employee->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                                    alt="profile-image">
                              </div>
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                  </div>
                  <!-- end settings content-->
               </div>
            </div>
            <!-- end card-->
         </div>
         <!-- end col -->
      </div>
      <!-- end row-->
   </div>
   <!-- container -->
</div>
<!-- content -->
<script type="text/javascript">
   $(document).ready(function(){
   	$('#image').change(function(e){
   		var reader = new FileReader();
   		reader.onload =  function(e){
   			$('#showImage').attr('src',e.target.result);
   		}
   		reader.readAsDataURL(e.target.files['0']);
   	});
   });
   
</script>
@endsection