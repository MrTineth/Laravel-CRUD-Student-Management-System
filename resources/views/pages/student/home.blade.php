@extends('layouts.main')  <!--Extent home body for main layout-->

@section('pageContent')  <!--Pass body-->




<div class="page-content" >

 <div class="container">
    <div class="col-md-12 p-4" align="center">
        <h2><i class="bi bi-person-bounding-box icon-blue"></i> Student Management</h2>
    </div>
    <div class="row">

    </div>

    <div class="row">
        <div class="col-md-2"> </div>

        <div class="col-md-8"> 

           <div class="stu-form-area">
            
            <form action="{{ route('student.save') }}" method="post">

              @csrf              <!--This token is very import for post data and security features-->

                <div class="row">

                   
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Student Name</label>
                            <input name="stu_name" type="text" class= "@error('stu_name') is-invalid @enderror form-control" id="email">
                            @error('stu_name') 
                            <div class="text-danger form-text">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>



                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dob" class="form-label">Student DOB</label>
                            <input name="stu_dob" type="date" class=" @error('stu_dob') is-invalid @enderror form-control" id="dob">
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
                            <input name="stu_address" type="text" class="@error('stu_address') is-invalid @enderror form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('stu_address') 
                            <div class="text-danger form-text">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>

                    

                </div>

                <button type="submit" class="btn btn-primary">Register Now</button>


              </form>
           </div>




           <div class="dataTableArea mt-5">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><i class="bi bi-table"></i></th>
                    <th scope="col">Student Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>


                  @foreach ($students as $key=> $student)    <!--Load data to the row-->
                    
                  
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $student->stu_name }}</td>
                    <td>{{ $student->stu_dob }}</td>
                    <td>{{ $student->stu_address }}</td>
                    <td>
                      
                      <a href="{{ route('student.edit', $student->id) }}"><i class="bi bi-pencil-fill icon-green"></i></a>
                      
                      
                      | 


                      <a href="{{ route('student.delete', $student->id) }}"><i class="bi bi-trash3-fill icon-red"></i></a>

                      | 


                      <a href="{{ route('student.manage', $student->id) }}"><i class="bi bi-bag-plus-fill icon-mange"></i></a>
                    




                    
                    </td>
                  </tr>

                  @endforeach


                  
                </tbody>
              </table>

           </div>






        </div>

        <div class="col-md-2"> </div>
    </div>



 </div>

</div>






@endsection