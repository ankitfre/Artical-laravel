<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 mb-2">
	<h1 class="text-center">Arical list</h1>
   </div>
   <div class="col-md-12 text-right">
   	<button class="btn btn-primary" onclick="add_artical()">Add New</button>
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
   		<tr>
   			<?php if($artical): ?>
   			<?php $i=0; ?>
   			<?php $__currentLoopData = $artical; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   			<?php $i++; ?>
   			<tr>
   				<td><?php echo e($i); ?></td>
   				<td>
   					<?php if($row->image): ?>
   					<img src="<?php echo e(asset('storage/'.$row->image)); ?>" width="80" height="70" />
   					<?php else: ?>
   					<img src="<?php echo e(asset('storage/artical/artical.jpeg')); ?>" width="80" height="70" />
   					<?php endif; ?>
   				</td>
   				<td><?php echo e($row->title); ?></td>
   				<td><?php echo e($row->body); ?></td>
   				<td><?php echo e($row->category); ?></td>
   				<td><a href="javascript:void(0)" onclick="editImage('<?php echo encrypt($row->id); ?>')"  class="btn btn-info">Edit</a></td>
   			</tr>
   			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   			<?php endif; ?>
   		</tr>
   	</table>
   </div>

 </div>
</div>


<script type="text/javascript">
	function add_artical(){
		window.location.href = "<?php echo e(url('add_artical')); ?>";
	}

	function editImage(articalId){
		
		window.location.href = "<?php echo e(url('edit_artical')); ?>"+'/'+articalId;
	}


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Artical/resources/views/artical/index.blade.php ENDPATH**/ ?>