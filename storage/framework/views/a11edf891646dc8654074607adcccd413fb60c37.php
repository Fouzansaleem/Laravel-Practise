<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post Detail</div>

					<div class="container">
					<h2>Post Detail</h2><br>



		<b>Title:</b> <?php echo e($post->title); ?><br>
		<b>Description:</b> <?php echo e($post->description); ?><br>
	
<br>

	<a type="submit"class="btn btn-primary" href="<?php echo e(route('post.index')); ?>">Back</a><br>
<br>

</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>