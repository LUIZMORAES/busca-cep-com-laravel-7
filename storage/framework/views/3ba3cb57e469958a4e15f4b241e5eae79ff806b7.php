

<?php $__env->startSection('content'); ?>

    <h1 class="mb-5">
        Adicionar CEP
    </h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('salvar')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label>Cep</label>
            <input type="text" class="form-control" name="cep" value="<?php echo e($cep); ?>">
        </div>
        <div class="form-group">
            <label>Logradouro</label>
            <input type="text" class="form-control" name="logradouro" value="<?php echo e($logradouro); ?>">
        </div>
        <div class="form-group">
            <label>Numero</label>
            <input type="text" class="form-control" name="numero">
        </div>
        <div class="form-group">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" value="<?php echo e($bairro); ?>">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade" value="<?php echo e($cidade); ?>">
        </div>
        <div class="form-group">
            <label>Estado</label>
            <input type="text" class="form-control" name="estado" value="<?php echo e($estado); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\buscacep_7\resources\views/adicionar.blade.php ENDPATH**/ ?>