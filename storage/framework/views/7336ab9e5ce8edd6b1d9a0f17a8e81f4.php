  <!--Extent home body for main layout-->

<?php $__env->startSection('pageContent'); ?>  <!--Pass body-->




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
            
            <form action="<?php echo e(route('student.save')); ?>" method="post">

              <?php echo csrf_field(); ?>              <!--This token is very import for post data and security features-->

                <div class="row">

                   
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Student Name</label>
                            <input name="stu_name" type="text" class= "<?php $__errorArgs = ['stu_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" id="email">
                            <?php $__errorArgs = ['stu_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <div class="text-danger form-text"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                    </div>



                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dob" class="form-label">Student DOB</label>
                            <input name="stu_dob" type="date" class=" <?php $__errorArgs = ['stu_dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" id="dob">
                            <?php $__errorArgs = ['stu_dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <div class="text-danger form-text"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input name="stu_address" type="text" class="<?php $__errorArgs = ['stu_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php $__errorArgs = ['stu_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <div class="text-danger form-text"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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


                  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    <!--Load data to the row-->
                    
                  
                  <tr>
                    <th scope="row"><?php echo e(++$key); ?></th>
                    <td><?php echo e($student->stu_name); ?></td>
                    <td><?php echo e($student->stu_dob); ?></td>
                    <td><?php echo e($student->stu_address); ?></td>
                    <td>
                      
                      <a href="<?php echo e(route('student.edit', $student->id)); ?>"><i class="bi bi-pencil-fill icon-green"></i></a>
                      
                      
                      | 


                      <a href="<?php echo e(route('student.delete', $student->id)); ?>"><i class="bi bi-trash3-fill icon-red"></i></a>

                      | 


                      <a href="<?php echo e(route('student.manage', $student->id)); ?>"><i class="bi bi-bag-plus-fill icon-mange"></i></a>
                    




                    
                    </td>
                  </tr>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  
                </tbody>
              </table>

           </div>






        </div>

        <div class="col-md-2"> </div>
    </div>



 </div>

</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Laravel\CRUD-Operation\resources\views/pages/student/home.blade.php ENDPATH**/ ?>