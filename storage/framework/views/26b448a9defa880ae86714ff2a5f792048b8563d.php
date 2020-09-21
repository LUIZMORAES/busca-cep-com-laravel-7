

<?php $__env->startSection('content'); ?>


    <h1 class="mb-5">
            Buscar CEP
        </h1>
        <form action="<?php echo e(route('buscar')); ?>" method="get">
            <div class="form-group">
                <label>Cep</label>
                <input type="text" class="form-control" name="cep">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\buscacep_7\resources\views/busca.blade.php ENDPATH**/ ?>