<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Ubah data</title>
</head>

<body>

    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Ubah data</h1>
                <hr>
                <?php $__currentLoopData = $hasils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="/nandur/public/hasils/update" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo e($hsl->id); ?>"> <br/>
                        <label for="nama_hasil">Nama Hasil</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama_hasil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_hasil" name="nama_hasil"
                            value="<?php echo e(old('nama_hasil') ?? $hsl->nama_hasil); ?>">
                        <?php $__errorArgs = ['nama_hasil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_panen">Tanggal Panen</label>
                    <input type="date" class="form-control <?php $__errorArgs = ['tanggal_panen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tanggal_panen" name="tanggal_panen"
                            value="<?php echo e(old('tanggal_panen') ?? $hsl->tanggal_panen); ?>"></div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah (Kg)</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jumlah" name="jumlah"
                                    value="<?php echo e(old('jumlah') ?? $hsl->jumlah); ?>"></div>

                    <div class="form-group">
                            <label for="asal_sawah">Asal sawah</label>
                                            <select class="form-control" name="asal_sawah" id="asal_sawah" >

                                            <option value="Sukun"
                                            <?php echo e(old('asal_sawah')=='Sukun'); ?> >
                                            Sukun
                                            </option>
                                            <option value="Pandanwangi"
                                            <?php echo e(old('asal_sawah')=='Pandanwangi'); ?> >
                                            Pandanwangi
                                            </option>
                                            <option value="Sukoharjo"
                                            <?php echo e(old('asal_sawah')=='Sukoharjo'); ?> >
                                            Sukoharjo
                                            </option>
                                            <option value="Batu"
                                            <?php echo e(old('asal_sawah')=='Batu'); ?> >
                                            Batu
                                            </option>
                                            </select>
                                        </div>

                           <br><div class="form-group"> <button type="submit" class="btn btn-primary mb-2">Update</button>
                            <a href="<?php echo e(route('hasil.index')); ?>" class="btn btn-secondary mb-2">Kembali</a>
                        </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH E:\xampp\htdocs\nandur\resources\views/edit.blade.php ENDPATH**/ ?>