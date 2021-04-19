<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row container">
		<div class="col-md-12">
			<h1 class="text-success" >Update Artical</h1>
			
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
			<form action="<?php echo e(url('update-artical')); ?>" method="post" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="articalId" value="<?php echo e(encrypt($artical->id)); ?>">
				<div class="form-group">
					<label>Title</label>	
					<input type="text" class="form-control" value="<?php echo e($artical->title); ?>" name="title" placeholder="Enter title">
				</div>
				<div class="form-group">
					<label>Body</label>	
					<textarea class="form-control" name="body"  ><?php echo e($artical->body); ?></textarea>
				</div>
				<div class="form-group">
					<label>Category</label>	
					<select class="form-control" name="category">
						<option value="" selected="">--please choose category--</option>
						<option <?php if($artical->category == 'Sports'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="Sports">Sports</option>
						<option <?php if($artical->category == 'Science'): ?> <?php echo e('selected'); ?> <?php endif; ?>  value="Science">Science</option>
						<option <?php if($artical->category == 'Tech'): ?> <?php echo e('selected'); ?> <?php endif; ?>  value="Tech">Tech</option>
						<option <?php if($artical->category == 'Pop Culture'): ?> <?php echo e('selected'); ?> <?php endif; ?>  value="Pop Culture">Pop Culture</option>
					</select>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo e(asset('storage/'.$artical->image)); ?>" width="200px" height="200px" />
					</div>
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\assignment\Artical\resources\views/artical/edit.blade.php ENDPATH**/ ?>