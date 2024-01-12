<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Contact Area')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Contact Area Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.home14.contact')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <ul class="nav nav-tabs" role="tablist">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($key == 0): ?> active <?php endif; ?>" data-toggle="tab" href="#tab_<?php echo e($key); ?>" role="tab"  aria-selected="true"><?php echo e($lang->name); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="tab-content margin-top-30" >
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="tab_<?php echo e($key); ?>" role="tabpanel" >
                                    <div class="form-group">
                                        <label for="home_page_14_<?php echo e($lang->slug); ?>_contact_area_subtitle"><?php echo e(__('Subtitle')); ?></label>
                                        <input type="text" name="home_page_14_<?php echo e($lang->slug); ?>_contact_area_subtitle" class="form-control" value="<?php echo e(get_static_option('home_page_14_'.$lang->slug.'_contact_area_subtitle')); ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_14_<?php echo e($lang->slug); ?>_contact_area_title"><?php echo e(__('Title')); ?></label>
                                        <input type="text" name="home_page_14_<?php echo e($lang->slug); ?>_contact_area_title" class="form-control" value="<?php echo e(get_static_option('home_page_14_'.$lang->slug.'_contact_area_title')); ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="home_page_14_<?php echo e($lang->slug); ?>_contact_area_button_text"><?php echo e(__('Button Title')); ?></label>
                                        <input type="text" name="home_page_14_<?php echo e($lang->slug); ?>_contact_area_button_text" class="form-control" value="<?php echo e(get_static_option('home_page_14_'.$lang->slug.'_contact_area_button_text')); ?>" >
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="home_page_14_contact_area_button_icon" class="d-block"><?php echo e(__('Icon')); ?></label>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="<?php echo e(get_static_option('home_page_14_contact_area_button_icon')); ?>"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="<?php echo e(get_static_option('home_page_14_contact_area_button_icon')); ?>" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control" value="<?php echo e(get_static_option('home_page_14_contact_area_button_icon')); ?>" name="home_page_14_contact_area_button_icon">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('.icp-dd').iconpicker();
        $('body').on('iconpickerSelected','.icp-dd', function (e) {
            var selectedIcon = e.iconpickerValue;
            $(this).parent().parent().children('input').val(selectedIcon);
            $('body .dropdown-menu.iconpicker-container').removeClass('show');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\latest xampp\htdocs\vayetech\resources\views/backend/pages/home/creative-design-agency/contact-area.blade.php ENDPATH**/ ?>