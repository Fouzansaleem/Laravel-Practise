<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

					<div class="container">
					<h2>Your Posts</h2><br>


<?php echo Form::open(array('route' => 'post.store','method'=>'POST')); ?>


Title:<br>
<input type="text" name="title"><br>
Description:<br>
<input type="text" name="description"><br><br>
<input type="submit" class="btn btn-primary" value="Submit" >

<a type="submit"  href="<?php echo e(route('post.index')); ?>">Cancel</a><br>

<?php echo Form::close(); ?>





</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>