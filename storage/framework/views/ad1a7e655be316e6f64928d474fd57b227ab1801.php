
<?php $__env->startSection('section'); ?>
     <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                 <th>SN.</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Pan Card</th>
                                 <th>Aadhar card</th>
                                 <th>RL</th>
                                 <th>10th Marksheet</th>
                                 <th>Graduation markesheet</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($data->name); ?></td>
                                <td><?php echo e($data->email); ?></td>
                                <td><a href="<?php echo e(asset('PanCard/'.$data->pan_card)); ?>" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="<?php echo e(asset('AadharCard/'.$data->aadhar_card)); ?>" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="<?php echo e(asset('RLCard/'.$data->rl_card)); ?>" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="<?php echo e(asset('TenMarksheet/'.$data->tenth_mark)); ?>" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="<?php echo e(asset('TenMarksheet/'.$data->tenth_mark)); ?>" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>

                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\latest xampp\htdocs\vayetech\resources\views/frontend/user/dashboard/employer/index.blade.php ENDPATH**/ ?>