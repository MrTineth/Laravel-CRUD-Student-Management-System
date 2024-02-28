@extends('layouts.main')  <!--Extent home body for main layout-->

@section('pageContent')  <!--Pass body-->




<div class="page-content" >

 <div class="container">
    <div class="col-md-12 p-4" align="center">
        <h2><i class="bi bi-person-bounding-box icon-blue"></i> Update Student Details</h2>
    </div>
    <div class="row">

    </div>

    <div class="row">
        <div class="col-md-2"> </div>

        <div class="col-md-8"> 

           <div class="stu-form-area">
            
            <form action="{{ route('student.update' , $student->id ) }}" method="post">

              @csrf              <!--This token is very import for post data and security features-->

                <div class="row">

                   
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Student Name</label>
                            <input name="stu_name" value="{{ $student->stu_name }}" type="text" class= "@error('stu_name') is-invalid @enderror form-control" id="email"> <!--Put value section for edit data-->
                            @error('stu_name') 
                            <div class="text-danger form-text">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>



                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dob" class="form-label">Student DOB</label>
                            <input name="stu_dob" value="{{ $student->stu_dob }}" type="date" class=" @error('stu_dob') is-invalid @enderror form-control" id="dob">
                            @error('stu_dob') 
                            <div class="text-danger form-text">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input name="stu_address" value="{{ $student->stu_address }}" type="text" class="@error('stu_address') is-invalid @enderror form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('stu_address') 
                            <div class="text-danger form-text">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>

                    

                </div>

                <button type="submit" class="btn btn-primary">Update Now</button>


              </form>
           </div>




          
        </div>

        <div class="col-md-2"> </div>
    </div>



 </div>

</div>






@endsection