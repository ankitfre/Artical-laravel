<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row container">
<div class="col-md-12">
<h1 class="text-success" >Add Artical</h1>
</div>	

<div class="col-md-6">

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
 <div class="alert alert-success">
<ul>
           
                <li><?php echo e(session('success')); ?></li>
           
        </ul>
 </div>
<?php endif; ?>


<form action="<?php echo e(url('store-artical')); ?>" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<div class="form-group">
	 <label>Title</label>	
		<input type="text" class="form-control" value="<?php echo e(old('title')); ?>" name="title" placeholder="Enter title">
	</div>
	<div class="form-group">
		 <label>Body</label>	
		<textarea class="form-control" name="body" value="<?php echo e(old('body')); ?>" ></textarea>
	</div>
	<div class="form-group">
		 <label>Category</label>	
		<select class="form-control" name="category">
			<option value="" selected="">--please choose category--</option>
			<option value="Sports">Sports</option>
			<option value="Science">Science</option>
			<option value="Tech">Tech</option>
			<option value="Pop Culture">Pop Culture</option>
		</select>
	</div>
	<div class="form-group">
	<label>Image</label>	
	<input type="file" class="form-control" name="image">
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-success" />
	<a href="<?php echo e(url('artical')); ?>" class="btn btn-danger">Back</a>
	</div>

</form>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Artical/resources/views/artical/add.blade.php ENDPATH**/ ?>