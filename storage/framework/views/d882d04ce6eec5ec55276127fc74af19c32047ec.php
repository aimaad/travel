<!DOCTYPE html>
<html>
<head>
    <title>Create Package</title>
</head>
<body>
    <h1>Create a New Package</h1>
    <form action="<?php echo e(route('packages.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="tour_id">Tour ID:</label>
            <input type="text" id="tour_id" name="tour_id">
        </div>
        <div>
            <label for="hotel_ids">Hotel IDs:</label>
            <input type="text" id="hotel_ids" name="hotel_ids[]">
        </div>
        <button type="submit">Create Package</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\dell\Downloads\VipTravel\resources\views/add_package.blade.php ENDPATH**/ ?>