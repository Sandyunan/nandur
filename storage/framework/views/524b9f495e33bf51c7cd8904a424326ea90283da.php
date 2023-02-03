<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<?php $__env->startSection('menuData','active'); ?>
<?php $__env->startSection('title','Data Hasil tani'); ?>
<?php $__env->startSection('content'); ?>
<div class="table100 ver2 m-b-110">
    <table data-vertable="ver2">
        <thead>
            <tr class="row100 head">
                <th class="column100 column1" data-column="column1">Nama Sayur</th>
                <th class="column100 column2" data-column="column2">Tanggal Panen</th>
                <th class="column100 column3" data-column="column3">Jumlah</th>
                <th class="column100 column4" data-column="column4">Asal Sawah</th>
               
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td class="py-3"><?php echo e($hsl->nama_hasil); ?></td>
                <td class="py-3"><?php echo e($hsl->tanggal_panen); ?></td>
                <td class="py-3"><?php echo e($hsl->jumlah); ?> Kg</td>
                <td class="py-3"><?php echo e($hsl->asal_sawah); ?></td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tbody>
            <tr class="row100">
              
        </tbody>
    </table>
    </p>
</div>
<?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\nandur\resources\views/data.blade.php ENDPATH**/ ?>