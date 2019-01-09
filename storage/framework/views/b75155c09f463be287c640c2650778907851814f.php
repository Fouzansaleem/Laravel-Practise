<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

          <div class="container">
          <h2>Your Posts</H2> 
          <div class="col-md-offset-5">
            <a type="submit" class="btn btn-primary" href="<?php echo e(route('post.create')); ?>" > Create New Post</a>
            
          </div>                                         
<br>

<div class="container">
<table class="table table-bordered">

  <tr>
    <th>Title</th>
    <th>Description</th>
    <th width="800px">Action</th>
  </tr>

  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($post->title); ?></td>
    <td><?php echo e($post->description); ?></td>
  <td>
  <a class="btn btn-success" href="<?php echo e(route('post.show',$post->id)); ?>">Show</a>
  <a class="btn btn-warning" href="<?php echo e(route('post.edit',$post->id)); ?>">Edit</a>
  <?php echo Form::open(['method'=>'DELETE','route'=>['post.destroy',$post->id],'style'=>'display:inline']); ?>

  <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

  <?php echo Form::close(); ?>

</td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
<a type="submit" class="btn btn-primary" href="<?php echo e(route('home')); ?>" > Home</a>

</div>
<br>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>