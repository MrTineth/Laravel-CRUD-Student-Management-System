@extends('layouts.main')  <!--Extent home body for main layout-->

@section('pageContent')  <!--Pass body-->




<div class="page-content" >

 <div class="container">
    <div class="col-md-12 p-4" align="center">
        <h2><i class="bi bi-person-bounding-box icon-blue"></i> Manage Student Details</h2>
    </div>
    
    <hr>
    <p align="center"><i class="bi bi-person-circle"></i> Student Name : {{ $student->stu_name }}</p>

    <div class="row">
        <div class="col-md-2"> </div>

        <div class="col-md-8"> 

           <div class="stu-form-area">
            
            <form action="{{ route('student.saveRecord') }}" method="post">

              @csrf              <!--This token is very import for post data and security features-->

              <input type="hidden" name="stu_id" value="{{ $student->id }}">

                <div class="row">

                   
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Record Title</label>
                            <input name="title" type="text" class= "form-control" >
                            
                          </div>
                    </div>



                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Record Date</label>
                            <input name="date" type="date" class="form-control">
                            
                          </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Description</label>
                            <input name="description" type="text" class="form-control" >
                            
                          </div>
                    </div>







                    

                </div>

                <button type="submit" class="btn btn-primary" value="Add Record">Add Record</button>


              </form>
           </div>




           <div class="dataTableArea mt-5">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><i class="bi bi-table"></i></th>
                    <th scope="col">Record Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach ( $stuRecords as $key => $stuRecord )
                   
                 
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{ $stuRecord->title }}</td>
                    <td>{{ $stuRecord->description }}</td>
                    <td>{{ $stuRecord->date }}</td>
                    <td>
                      <a href=""><i class="bi bi-pencil-fill icon-green"></i></a>
                      
                      
                      | 
                      
                      <a href=""><i class="bi bi-trash3-fill icon-red"></i></a></td>
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