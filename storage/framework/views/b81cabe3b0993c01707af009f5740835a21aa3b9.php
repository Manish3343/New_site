<?php $__env->startSection('section'); ?>
    <div class="row">
       <?php if(Auth::user()->user_type=="Employer"): ?>
        <?php if(get_static_option('appointment_module_status')): ?>
        <div class="col-lg-6 mb-2" id="copy-button">
            <div class="user-dashboard-card">
                <div class="icon"><i class="fas fa-calendar"></i></div>
                <div class="content">
                    <h4 class="title">Referal Link</h4>
                    <?php
                        $unique=App\Employer::where('user_id',Auth::user()->id)->first()->unique_id;
                    ?>
                    <span class="h6 copy-content" style="color:white">http://127.0.0.1:8000/employer/employee?unique=<?php echo e($unique); ?></span>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_static_option('appointment_module_status')): ?>
    <div class="col-lg-6 mb-2">
        <div class="user-dashboard-card">
            <div class="icon"><i class="fas fa-calendar"></i></div>
            <div class="content">
                <h4 class="title">Required Document</h4>
                
                <a href="<?php echo e(route('employer.document')); ?>" class="h6" style="color:white">SetUp</a>
            </div>
        </div>
    </div>
<?php endif; ?>
        <?php if(get_static_option('appointment_module_status')): ?>
            <div class="col-lg-6">
                <div class="user-dashboard-card">
                    <div class="icon"><i class="fas fa-calendar"></i></div>
                    <div class="content">
                        <h4 class="title"><?php echo e(get_static_option('appointment_page_'.$user_select_lang_slug.'_name')); ?> <?php echo e(__('Booking')); ?></h4>
                        <span class="number"><?php echo e($appointments); ?></span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
       
        <?php if(get_static_option('support_ticket_module_status')): ?>
            <div class="col-lg-6">
                <div class="user-dashboard-card style-01">
                    <div class="icon"><i class="fas fa-calendar"></i></div>
                    <div class="content">
                        <h4 class="title"><?php echo e(__('All')); ?> <?php echo e(get_static_option('support_ticket_page_'.$user_select_lang_slug.'_name')); ?></h4>
                        <span class="number"><?php echo e($support_tickets); ?></span>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php else: ?>
        <?php if(get_static_option('support_ticket_module_status')): ?>
        <div class="col-lg-6">
            <div class="user-dashboard-card style-01">
                <div class="icon"><i class="fas fa-calendar"></i></div>
                <div class="content">
                    <h4 class="title"><?php echo e(__('All')); ?> <?php echo e(get_static_option('support_ticket_page_'.$user_select_lang_slug.'_name')); ?></h4>
                    <span class="number"><?php echo e($support_tickets); ?></span>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <?php endif; ?>
    </div>  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
 
   <script>
    $(document).ready(function() {
        $("#copy-button").click(function() {
             
            var copyContents = $(".copy-content");
            var copiedText = '';

            copyContents.each(function() {
                copiedText += $(this).text().trim() + '\n';
            });

            var textarea = $("<textarea>").val(copiedText);
            $("body").append(textarea);
            textarea.select();
            document.execCommand("copy");
            textarea.remove();

            var originalButtonText = $(this).text();
            $(this).text("Copied!");

            setTimeout(function() {
                $("#copy-button").text(originalButtonText);
            }, 1500);
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\latest xampp\htdocs\vayetech\resources\views/frontend/user/dashboard/user-home.blade.php ENDPATH**/ ?>