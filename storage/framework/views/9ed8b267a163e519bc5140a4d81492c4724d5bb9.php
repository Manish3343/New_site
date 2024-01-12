
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Employer')); ?>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
            <div class="card">
            <div class="card-body">
         <?php if(session('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
        <?php endif; ?>
       <a href="<?php echo e(route('admin.employer.create')); ?>" class="btn btn-primary" style="float:right">+ New Employer</a>
        <div class="row">

            <table class="table table-bordered">
        <thead>
            <th>SN.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Education</th>
            <th>Employer Code</th>
            <th>Addresss</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $employer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->name); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->phone); ?></td>
            <td><?php echo e($data->education); ?></td>
            <td><?php echo e($data->username); ?></td>
            <td><?php echo e($data->addres); ?></td>
            <td>
                <a href="<?php echo e(route('admin.edit.employer',$data->id)); ?>" class="btn btn-primary">Edit</a>
                <a href="<?php echo e(route('admin.delete.employer',$data->id)); ?>" class="btn btn-danger">Delete</a>
    
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        </tbody>
            </table>
        </div>
            </div>
            </div>
            </div>
        </div>
    </div>   
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\latest xampp\htdocs\vayetech\resources\views/backend/employer/employer.blade.php ENDPATH**/ ?>