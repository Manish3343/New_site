
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Create Employer')); ?>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-ml-12 padding-bottom-30 ">
        <div class="row">
       <div class="col-12 mt-5">
        <div class="card">
        <div class="card-body">
            <form action="<?php echo e(($latest_data)?route('admin.employer.update',$latest_data->id):route('admin.employer.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="<?php echo e(($latest_data)?$latest_data->name:''); ?>" class="form-control" id="name" placeholder="Enter name" name="name">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" value="<?php echo e(($latest_data)?$latest_data->email:''); ?>" class="form-control" id="email" placeholder="Enter email" name="email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
                    </div>
                      <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" value="<?php echo e(($latest_data)?$latest_data->phone:''); ?>" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
                    </div>
                    <?php if($latest_data): ?>
                    <div class="form-group">
                      <label for="email">Gender:</label>
                      <select name="gender" id="gender" class="form-control">
                        <option value="male" <?php echo e($latest_data->gender=='male'?'selected':''); ?>>Male</option>
                        <option value="female"<?php echo e($latest_data->gender=='female'?'selected':''); ?>>Female</option>
                        <option value="other"<?php echo e($latest_data->gender=='other'?'selected':''); ?>>Other</option>
                      </select>
                    </div>
                    <?php else: ?>
                    <div class="form-group">
                        <label for="email">Gender:</label>
                        <select name="gender" id="gender" class="form-control">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                      <?php endif; ?>

                    <div class="form-group">
                        <label for="phone">Higher Education:</label>
                        <input type="text" value="<?php echo e(($latest_data)?$latest_data->education:''); ?>" class="form-control" id="education" placeholder="Enter Higher Education" name="education">
                        <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                    </div>
                      <div class="form-group">
                        <label for="phone">Address:</label>
                        <input type="text" value="<?php echo e(($latest_data)?$latest_data->addres:''); ?>" class="form-control" id="adress" placeholder="Enter address" name="address">
                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                      <?php $__errorArgs = ['pswd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirm_pwd" placeholder="Enter confirm password" name="confirm_pwd">
                        <?php $__errorArgs = ['confirm_pwd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
         
        </div>
       </div>
       </div>
       
    </div>  
</div> 
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\latest xampp\htdocs\vayetech\resources\views/backend/employer/add_employer.blade.php ENDPATH**/ ?>