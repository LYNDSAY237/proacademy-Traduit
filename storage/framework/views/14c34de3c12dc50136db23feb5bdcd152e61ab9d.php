<?php $__env->startSection('title', 'A Propos'); ?>
<?php $__env->startSection('page'); ?>
    <div class="card">
        <div class="card-body text-center">
            <img src="<?php echo get_option('site_logo'); ?>">
            <div class="h-10"></div>
            <h3>Proacademy LMS</h3>
            <h4>Version: 2.7</h4>
            <div class="h-10"></div>
            <h5><p>Edité par <a href="https://codecanyon.net/item/proacademy-lms-online-courses-marketplace/25384806">Codecanyon</a></p></h5>
            <p><a href="mailto:prodevelopersteam@gmail.com">Support Proacademy</a></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.newlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proacademy\resources\views/admin/about.blade.php ENDPATH**/ ?>