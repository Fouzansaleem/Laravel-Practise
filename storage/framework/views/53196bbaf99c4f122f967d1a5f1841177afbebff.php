<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

          <div class="container">
          <h2>Your Posts</h2>
<div align="center">
  <a type="submit" class="btn btn-primary" href="<?php echo e(route('post.create')); ?>" > Create New Post</a>
</div>


<table>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th width="280px">Action</th>
  </tr>
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($post->title); ?></td>
    <td><?php echo e($post->description); ?></td>
  <td>
  <a href="<?php echo e(route('post.show',$post->id)); ?>">Show</a>
  <a href="<?php echo e(route('post.edit',$post->id)); ?>">Edit</a>
  <?php echo Form::open(['method'=>'DELETE','route'=>['post.destroy',$post->id],'style'=>'display:inline']); ?>

  <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

  <?php echo Form::close(); ?>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>






</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>