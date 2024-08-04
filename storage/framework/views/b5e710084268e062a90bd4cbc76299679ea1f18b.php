
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('themes/gotrip/dist/frontend/module/space/css/space.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css")); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bravo_detail">
        <?php echo $__env->make('Layout::parts.bc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="bravo_content">
            <?php echo $__env->make('Space::frontend.layouts.details.space-detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('Layout::map.detail.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container">
                <?php echo $__env->make('Layout::common.detail.review', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo $__env->make('Space::frontend.layouts.details.space-related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script>
        jQuery(function ($) {
            <?php if($row->map_lat && $row->map_lng): ?>
            new BravoMapEngine('map_content', {
                disableScripts: true,
                fitBounds: true,
                center: [<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>],
                zoom:<?php echo e($row->map_zoom ?? "8"); ?>,
                ready: function (engineMap) {
                    engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {
                        icon_options: {
                            iconUrl:"<?php echo e(get_file_url(setting_item("space_icon_marker_map"),'full') ?? url('images/icons/png/pin.png')); ?>"
                        }
                    });
                }
            });
            <?php endif; ?>
        })
    </script>
    <script>
        var bravo_booking_data = <?php echo json_encode($booking_data); ?>

        var bravo_booking_i18n = {
			no_date_select:'<?php echo e(__('Please select Start and End date')); ?>',
            no_guest_select:'<?php echo e(__('Please select at least one guest')); ?>',
            load_dates_url:'<?php echo e(route('space.vendor.availability.loadDates')); ?>',
            name_required:'<?php echo e(__("Name is Required")); ?>',
            email_required:'<?php echo e(__("Email is Required")); ?>',
        };
    </script>
    <script type="text/javascript" src="<?php echo e(asset('module/space/js/single-space.js?_ver='.config('app.asset_version'))); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/gotrip/module/space/js/single-space.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Downloads\VipTravel\themes/GoTrip/Space/Views/frontend/detail.blade.php ENDPATH**/ ?>