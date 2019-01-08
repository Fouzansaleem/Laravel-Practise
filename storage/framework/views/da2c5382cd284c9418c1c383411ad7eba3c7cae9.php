<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

					<div class="container">
					<h2>Post Detail</h2><br>

<div>
<a class="btn btn-link" href="<?php echo e(route('post.index')); ?>">Go Back</a><br>
</div>
<br/>

		Title: <?php echo e($post->title); ?><br>
		Description: <?php echo e($post->description); ?><br>




</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>