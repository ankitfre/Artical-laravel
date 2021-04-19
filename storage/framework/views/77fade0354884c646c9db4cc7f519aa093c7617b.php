<?php $__env->startSection('content'); ?>
<div class="container">
	<?php if(session('success')): ?>
		<div class="alert alert-success">
			<ul>
                <li><?php echo e(session('success')); ?></li>
            </ul>
 		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-12 mb-2">
			<h1 class="text-center">Artical list</h1>
   		</div>
   		<div class="col-md-12 text-right">
			<a class="btn btn-primary" href="<?php echo e(url('add_artical')); ?>">Add New</a>
   		</div>
		<div class="col-md-12 mt-3">
			<table class="table mt-3">
				<tr>
					<th>S.No</th>
					<th>Image</th>
					<th>Title</th>
					<th>Body</th>
					<th>Category</th>
					<th>Edit</th>
				</tr>
				<?php if($artical && count($artical)): ?>
					<?php $__currentLoopData = $artical; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><img src="<?php echo e(asset('storage/'.$row->image)); ?>" width="80" height="70" /></td>
							<td><?php echo e($row->title); ?></td>
							<td><?php echo e($row->body); ?></td>
							<td><?php echo e($row->category); ?></td>
							<td><a href="<?php echo e(url('edit_artical')); ?>/<?php echo e(encrypt($row->id)); ?>" class="btn btn-info">Edit</a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<tr><td colspan="6" class="text-center">Not Artical found</td></tr>
				<?php endif; ?>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\assignment\Artical\resources\views/artical/index.blade.php ENDPATH**/ ?>