<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\StuRecord;

class StudentController extends Controller
{

    protected $student;      //student table
    protected $stu_record;   //student record table

    public function __construct(){             //create constructors for tables
        $this->student = new Student();
        $this->stu_record = new StuRecord();
    }


    public function showData(){    //Show data on webpage
        $response['students']=$this->student->all();
        return view('pages.student.home')->with($response);
    }

    
    
    
    
    
    public function saveData(Request $request){

        $request->validate([
 
            'stu_name'=>['required'],
            'stu_dob'=>['required'],
            'stu_address'=>['required']
        ]);

       // dd($request->all());

       $this->student->create($request->all());
       return redirect()->back();
    }


    public function deleteData($stu_id){   //function for delete 

        $student = $this->student->find($stu_id);
        $student->delete();
        return redirect()->back();

    }



    public function editData($stu_id){     //function for edit

        $response['student']= $this->student->find($stu_id);
        return view('pages.student.edit')->with($response);
        
    }


    public function updateData(Request $request, $stu_id){         //function for update

        

        $student = $this->student->find($stu_id);
        $student->update(array_merge($student->toArray(), $request->toArray()));
        return redirect('student');


    }

    public function viewRecords($stu_id){

        $response['student']=$this->student->find($stu_id);                 //function for manage student

        $response['stuRecords']=$this->stu_record->where('stu_id',$stu_id)->get();  //Show manage data

        return view('pages.student.manage')->with($response);
    }


    public function saveRecord(Request $request){                            //function for saveRecord

          //dd($request->all());

          $this->stu_record->create($request->all());
          return redirect()->back();

    }


    


}
