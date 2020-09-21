<?php $__env->startSection('content'); ?>

    <h1 class="mb-5">
            Endereços Cadastrados
        </h1>

        <a class="btn btn-success" href="<?php echo e(route('adicionar')); ?>">
            Adicionar CEP
        </a>

        <?php if(session('sucesso')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('sucesso')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('erro')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(session('erro')); ?>

            </div>
        <?php endif; ?>

        <table class="table mt-5">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Numero</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Data da Criação</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($endereco->id); ?></td>
                    <td><?php echo e($endereco->cep); ?></td>
                    <td><?php echo e($endereco->logradouro); ?></td>
                    <td><?php echo e($endereco->numero); ?></td>
                    <td><?php echo e($endereco->bairro); ?></td>
                    <td><?php echo e($endereco->cidade); ?></td>
                    <td><?php echo e($endereco->estado); ?></td>
                    <td><?php echo e((new DateTime($endereco->created_at))->format('d/m/Y H:i:s')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\buscacep_7\resources\views/listagem.blade.php ENDPATH**/ ?>