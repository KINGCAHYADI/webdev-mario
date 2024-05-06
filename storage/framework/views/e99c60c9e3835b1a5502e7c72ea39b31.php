
<?php $__env->startSection('body'); ?>
<h3>Contact Information</h3>

<?php if($contactData): ?>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contactData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contact['name']); ?></td>
                <td><?php echo e($contact['email']); ?></td>
                <td><?php echo e($contact['phone']); ?></td>
                <td><?php echo e($contact['message']); ?></td>
                <td>
                    <form action="<?php echo e(route('contact.delete', ['index' => $index])); ?>" method="POST" style="display: inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No contact information found.</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\commerce - Week 1\resources\views/msg.blade.php ENDPATH**/ ?>