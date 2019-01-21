<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home Page</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                        <a type="submit"  class="btn btn-primary"  href="<?php echo e(route('post.create')); ?>" > Create New Post</a>

                        <a type="submit" style="float: right" class="btn btn-primary"  href="<?php echo e(route('post.index')); ?>" > Your Post</a>
                        <br>
                        <br>


                                <table class="table table-bordered">
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created By</th>
                                        <th width="400px">Action</th>
                                    </tr>
<?php if(auth()->guard()->check()): ?>
                                    <?php if(count($posts)>0): ?>
                                        <?php $__currentLoopData = $posts->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($post->title); ?></td>
                                    <td><?php echo e($post->description); ?></td>
                                    <td><?php echo e($post->creator->name); ?></td>

                                    <td><a class="btn btn-success" href="<?php echo e(route('post.show',$post->id)); ?>">Show</a>
                                    <?php if(Auth::id() == $post->user_id): ?>
                                     <a class="btn btn-warning" href="<?php echo e(route('post.edit',$post->id)); ?>">Edit</a>
                                    <?php endif; ?>
                                    </td>

                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <h2>No Posts is Created</h2>
                                    <?php endif; ?>

                                </table>
                                <?php echo e($posts->render()); ?>

<?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>