<?php $__env->startSection('title', 'User list'); ?>
<?php $__env->startSection('content'); ?>
<a href="/user/create" class="btn btn-primary">Create user</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <th scope="row"><?php echo e($user->id); ?></th>
    <td><?php echo e($user->name); ?></td>
    <td><?php echo e($user->password); ?></td>
    <td>
      <a href="/user/<?php echo e($user->id); ?>" class="btn btn-primary">Mostrar</a>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>