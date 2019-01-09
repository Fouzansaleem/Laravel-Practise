<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

					<div class="container">
					<h2>Edit Post</h2><br>

<?php echo Form::model($post,['method'=>'PATCH','route'=>['post.update',$post->id]]); ?>

Title:<br>
<?php echo Form::text('title',null,array()); ?><br>
Description:<br>
<?php echo Form::text('description',null,array()); ?><br>
<br>
<input type="submit" value="Submit" class="btn btn-primary" >
<a class="btn btn-warning" href="<?php echo e(route('post.index')); ?>">Go Back</a><br>

<?php echo Form::close(); ?>


<br>

</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>